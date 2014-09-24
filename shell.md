# Shell Generic unix shell

Get memory consumption percentage: `free -m | awk '{ if (NR == 2) print $3/$2*100 }' | bc -l`

As above but trim decimal: `free -m | awk '{ if (NR == 2) print $3/$2*100 }' | bc -l | awk '{printf "%3.1f", $1}'`

As above but pretty: `free -m | awk '{ if (NR == 2) print $3/$2*100 }' | bc -l | awk '{printf "%3.1f", $1}' | xargs -i echo "Memory Usage: "{}"%"`

Prettyify JSON: `curl jsonendpoint.com | python -m json.tool`

Change ownership of FILE to current user: `sudo chown -R $USER FILE`

List commands you use most often: `history | awk '{a[$2]++}END{for(i in a){print a[i] " " i}}' | sort -rn | head`

List top ten processes by memory usage: `ps aux | sort -nk +4 | tail`

Push current directory onto stack to come back to, instead of `cd`: `pushd`, `popd`

Show processes using internet: `lsof -P -i -n`

Open output of a command in vim: `tail /some/file | vim -`

Remove blank lines from a file and save to other file: `grep . filename > newfilename`

View a markdown file in man page style: `pandoc -s -f markdown -t man foo.md | man -l -`

Set up http server for current directory: `python -m SimpleHTTPServer`

Set up in-memory filesystem for `<dir>` with memory `<size>` MB: `mount -t tmpfs -o size=<size>m tmpfs <dir>`
