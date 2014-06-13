Command Mode
============

Delete specific line(s)
-----------------------

```
:<line-range>d
```
e.g.
```
:5d
:1,5d
```
Navigation
==========

Go to local declaration : `gd`

Go to global declaration : `gD`

Move down `n-1` lines to first none blank character: `n_`
Macros and Repeatables
======================

norm
----
Do something for each line of a selection.
e.g. Append a * to each line of a file.
```
:%norm A*
```
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

## Vim with clipboard support: `sudo apt-get install vim-gnome`
