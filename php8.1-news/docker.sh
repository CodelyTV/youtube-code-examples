example=$(ls src | fzf)

if [[ $example == *"fibers"* ]]; then
  docker run -it -v `pwd`:`pwd` -w `pwd` phpfiber php "src/$example" 2>/dev/null
else
  docker run -it -v `pwd`:`pwd` -w `pwd` phpdaily/php:8.1-dev php "src/$example" 2>/dev/null
fi



