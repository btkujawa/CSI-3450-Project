convert $1 -resize 559x650! $1

convert -size 663x650 canvas:white -gravity west ps1banner.png -composite $1 -geometry +104+0 -composite ../ps1/$2-cover.png