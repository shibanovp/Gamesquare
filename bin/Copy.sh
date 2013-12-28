#!/bin/bash
#path from
pfrom="/home/paul/Projects/Gamesquare"
#path to
pto="/home/paul/Projects/WP/wp-content/themes/gamesquare"
rm -r -f $pto
cp -r $pfrom $pto
