# Tmux

## Sessions

New session : `tmux new -s session_name`

Attach to existing session: `tmux attach -t session_name`

Switch to a session: `tmux switch -t session_name`

List sessions: `tmux list-sessions`

Detach current session: `tmux detach` or `prefix + d`

## Windows (tabs)

Create a new window: `tmux new window` or `prefix + c`

Move to window based on index: `tmux select-window -t :0-9` or `prefix + 0-9`

Next window: `prefix n`

Previous window: `prefix p`

Rename current window: `tmux rename-window` or `prefix + ,`

Renumber current window: `tmux move-window` or `prefix + .`

## Panes (splits)

Split window vertically: `tmux split-window` or `prefix + "` "

Split window horizontally; `tmux split-window -h` or `prefix + %`

Swap panes with another in specified direction: `tmux swap-pane -[ULDR]` or `prefix + { or }`

Select the next pane in the specified direction: `tmux select-pane -[ULDR]`

Toggle maximised pane: `tmux resize-pane -Z` or `prefix + z`
