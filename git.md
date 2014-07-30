# Git

Show current Git branch: `git rev-parse --abbrev-ref HEAD` - useful for bash scripts

Checkout previous Git branch: `git checkout -`

Merge in previous Git branch: `git merge -`

Get number of commits for repository: `git rev-list HEAD --count`

View commits different on branches: `git log <branch1>..<branch2>`

As above but in easier to parse format: `git log <branch1>..<branch2> --oneline`
