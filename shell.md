# Shell Generic unix shell

Get memory consumption percentage: `free -m | awk '{ if (NR == 2) print $3/$2*100 }' | bc -l`
As above but trim decimal: `free -m | awk '{ if (NR == 2) print $3/$2*100 }' | bc -l | awk '{printf "%3.1f", $1}'`
