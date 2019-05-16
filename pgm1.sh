for i in {100..999};do
	num="$i"
	#echo $i
	if [[ $num == *[456789]* ]];then
		printf ""
	else
		echo $i
	fi
done
