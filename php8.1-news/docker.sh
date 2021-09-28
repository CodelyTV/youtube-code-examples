example=$(ls src | fzf)

docker run -it -v `pwd`:`pwd` -w `pwd` phpdaily/php:8.1 php "src/$example" 2>/dev/null
