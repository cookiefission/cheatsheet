# Vim

## Basic Movement
Command     | Effect
------------|--------------------------
`h j k l`   |Left, Right, Up, Down
`b w`       |Word back, Word forward
`ge e`      |End of word left, right
`{ }`       |Beginning of previous, next paragraph
`( )`       |Beginning of previous, next sentence
`0 gm`      |Beginning, middle of line
`^ $`       |First, last character of line
`nG ngg`    |Line _n_, default last, first
`n%`        |Percentage _n_ of the file
`%`         |Match of next brace, bracket, comment, #define
`nH nL`     |Line n from start, bottom of window
`M`         |Middle line of window

## Insertion & Replace -> Insert Mode
Command     | Effect
------------|--------------------------
`i a`       |Insert before, after cursor
`I A`       |Insert at beginning, end of line
`gI`        |Insert text in first column
`o O`       |Open new line below, above current
`rc`        |Replace character under cursor with _c_
`grc`       |Like `r` but without affecting layout
`R`         |Replace characters starting at cursor
`gR`        |Like `R` but without affecting layout
`cm`        |Change text of movement command _m_
`cc` or `S` |Change current line
`C`         |Change to end of line
`s`         |Change one character and insert
`~`         |Switch case and advance cursor
`g~m`       |Switch case of movement comment _m_
`gum gUm`   |Lowercase, Uppercase text of movement _m_
`<m >m`     |Shift left, right text of movement _m_
`n<< n>>`   |Shift _n_ lines left, right

## Deletion
Command     | Effect
------------|--------------------------
`x X`       |Delete character under, before cursor
`dm`        |Delete text of movement _m_
`dd D`      |Delete current line, to the end of the line
`J gJ`      |Join current line with next, without space
`:rd<CR>`   |Delete range _r_ lines
`:rdx<CR>`   |Delete range _r_ lines into register _x_

## Insert mode
Command     | Effect
------------|---------------------------
`^Vc ^Vn`   | Insert char _c_ literally, decimal value _n_
`^A`        | Insert previously inserted text
`^@`        | Same as `^A` and exit insert mode
`^Rx ^R^Rx` | Insert contends of register _x_, literally
`^N` `^P`   | Text completion before, after cursor
`^W`        | Delete word before cursor
`^U`        | Delete all inserted character in current line
`^D ^T`     | Shift left, right one shift width
`^Oc`       | Execute _c_ in temporary command mode
`^X^E ^X^Y` | Scroll up, down

## Copying
Command     | Effect
------------|---------------------------
`"x`        | Use register _x_ for next delete, yank, put
`:reg<CR>`  | Show the content of all registers
`:reg x<CR>`| Show the content of register x
`ym`        | Yank the text of movement _m_
`yy` or `Y` | Yank current line into register
`p P`       | Put register after, before cursor
`]p [p`     | Like `p P` with indent adjusted
`gp gP`     | Like `p P` leaving cursor after new text

## Advanced Insertion
Command     | Effect
------------|----------------------------
`g?m`       | Perform rot13 encoding on movement _m_
`n^A n^X`   | _+n_, _-n_ to number under cursor
`gqm`       | Format lines of movement _m_ to fixed width
`:rce w<CR>`| Center lines in range _r_ to width _w_
`:rle i<CR>`| Left align lines in range _r_ with indent _i_
`:rri w<CR>`| Right alight lines in range _r_ to width _w_
`!mc<CR>`   | Filter lines of movement _m_ through command _c_
`n!!<CR>`   | Filter _n_ lines through command _c_
`:r!c<CR>`  | Filter range _r_ lines through command _c_


## Visual Mode
Command     | Effect
------------|----------------------------
`v V ^V`    | Start/stop highlighting characters, lines, block
`o`         | Exchange cursor position with start of highlighting
`gv`        | Reselect previous selection
`aq as ap`  | Select a word, as sentence, a paragraph
`ab aB`     | Select a block `( )`, a block `{ }`

## Undoing, Repeating & Registers
Command     | Effect
------------|----------------------------
`u U`       | Undo last command, restore last changed line
`. ^R`      | Repeat least changes, redo last undo
`n.`        | Repeat last changes with count replaced by _n_
`qc qC`     | Record, append typed characters in register _c_
`q`         | Stop recording
`@c`        | Execute the content of register _c_
`@@`        | Repeat previous `@` command
`:@c<CR>`   | Execute register _c_ as an `@` command
`:rg/p/c`   | Execute ex command _c_ on range _r_ where pattern matches _p_

## Complex Movement
Command     | Effect
------------|----------------------------
`- +`       | Line up, down on first non blank character
`B W`       | Space-separated word left, right
`gE E`      | End of space-separated word left, right
`n_`        | Down _n-1_ line on first non-blank character
`g0`        | Beginning of screen line
`g^ g$`     | First, last character of screen line
`gk gj`     | Screen line up, down
`fc Fc`     | Next, previous occurence of character _c_
`tc Tc`     | Before next, previous occurence of character _c_
`; ,`       | Repeat last _fFtT_, in opposite direction
`[[ ]]`     | Start of section backward, forward
`[] ][`     | End of section backward, forward
`[( ])`     | Unclosed _(, )_ backward, forward
`[{ ]}`     | Unclosed _{, }_ backward, forward
`[m ]m`     | Start of backward, forward _Java_ method
`[# ]#`     | Unclosed `#if, #else, #endif` backward, forward
`[* ]*`     | Start, end of _/* */_ backward, forward

## Miscellaneous

`:<C-R><C-W>`:  Bring current word into ex command

`cmd | vim -`: Open output of `cmd` in vim buffer (from commandline)
