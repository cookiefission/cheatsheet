Line Manipulation
=================

Join 2 lines together: `J`
---------------------

```
test
test
```
goes to

`testtest`

Join every other line of a selection together
---------------------------------------------
```
:%norm J
```

Auto-magically indent: `=`
---------------------

examples:
* `gg=G` indents the entire file correctly
* `=20G` indents from current line to line 20
