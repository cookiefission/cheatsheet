# Tmux

List of basic commands at this point

## Sessions

New session : `tmux new -s session_name`

Attach to existing session: `tmux attach -t session_name`

Switch to a session: `tmux switch -t session_name`

List sessions: `tmux list-sessions`

Detach current session: `tmux detach` or `prefix + d`

## Windows (tabs)

Create a new window: `tmux new window` or `prefix + c`

Move to window based on index: `tmux select-window -t :0-9` or `prefix + 0-9`

Rename current window: `tmux rename-window` or `prefix + ,`
