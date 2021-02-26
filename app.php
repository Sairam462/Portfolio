if [ -f $1/index.html ]; then
  echo "HelloFramework"
  exit 0
else
  exit 1
fi
