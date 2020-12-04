convert $1 -resize 1050x1500! $1

convert -size 1050x1500 canvas:white -composite $1 ../gc/$2-cover.png