# Bash

Clear screen: `<Ctrl>-l`

Close current terminal session: `<Ctrl>-d`

Run last command as root: `sudo !!`

Open half-typed command in `$EDITOR`: `<Ctrl>-x <Ctrl>-e` is a shortcut for `fc`

Cut partial command, do something else, and paste it back in: `<ctrl+u> [...] <ctrl+y>`

Make script of last run command: `echo "!!" > foo.sh`

Switch the 2 characters before cursor: `<Ctrl>-t`

Display 256 colours with their numbers: `for i in {0..255}; do printf "\x1b[38;5;${i}mcolour${i}\n"`
