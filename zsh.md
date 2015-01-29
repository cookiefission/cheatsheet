# Zsh

### Push command output into an array
```zsh
array_of_lines=("${(@f)$(my_command)}")
```

`(@f)`: expansion flags, safer alternative to `IFS="\n"`
