watch('(.*).php')  { |m| code_changed(m[0]) }

def code_changed(file)
    run "phpunit"
end

def run(cmd)
  result = `cd Test && #{cmd}`
    growl result rescue nil
end

def growl(message)
  puts(message)
  message = message.split("\n").last(3);
  osn = Config::CONFIG["target_os"].downcase
  growlnotify = `which growlnotify`.chomp if osn.include?("darwin")
  growlnotify = `which notify-send`.chomp if osn.include?("linux")

  title = message.find { |e| /FAILURES/ =~ e } ? "FAILURES" : "PASS"
    if title == "FAILURES"
        image = ".watchr_images/failed.png"
        info = /\x1b\[37;41m\x1b\[2K(.*)/.match(message[1])[1]
    else
        image = ".watchr_images/passed.png"
        info = /\x1b\[30;42m\x1b\[2K(.*)/.match(message[1])[1]
    end

  options = "-w -n Watchr --image '#{File.expand_path(image)}' --html '#{title}'  -m '#{info}'" if osn.include?("darwin")
  options = "-i '#{File.expand_path(image)}' '#{title}' '#{info}'" if osn.include?("linux")
  system %(#{growlnotify} #{options} &)
end
