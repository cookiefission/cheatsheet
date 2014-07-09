# Bash

Prettyify JSON: `curl jsonendpoint.com | python -m json.tool`

Change ownership of FILE to current user: `sudo chown -R $USER FILE`

Clear screen: `<Ctrl>-l`

Close current terminal session: `<Ctrl>-d`

Run last command as root: `sudo !!`

Set up http server for current directory: `python -m SimpleHTTPServer`

Open half-typed command in `$EDITOR`: `<Ctrl>-x <Ctrl>-e` is a shortcut for `fc`

Cut partial command, do something else, and paste it back in: `<ctrl+u> [...] <ctrl+y>`

List commands you use most often: `history | awk '{a[$2]++}END{for(i in a){print a[i] " " i}}' | sort -rn | head`

List top ten processes by memory usage: `ps aux | sort -nk +4 | tail`

Push current directory onto stack to come back to, instead of `cd`: `pushd`, `popd`

Make script of last run command: `echo "!!" > foo.sh`

Show processes using internet: `lsof -P -i -n`

Open output of a command in vim: `tail /some/file | vim -`

Remove blank lines from a file and save to other file: `grep . filename > newfilename`

View a markdown file in man page style: `pandoc -s -f markdown -t man foo.md | man -l -`
