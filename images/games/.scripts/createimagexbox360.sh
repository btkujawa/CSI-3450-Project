convert $1 -resize 1050x1294! $1

convert -size 1050x1500 canvas:white -gravity north xbox360banner.png -composite $1 -geometry +0+206 -composite ../xbox360/$2-cover.png