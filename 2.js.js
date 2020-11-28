function putar(arr) {
	var temp = '';
	for(let i = 1; i <= 4; i++) {
		temp = arr[0]
		arr.shift()
		arr.push(temp)
		console.log('putaran '+i+': '+arr);
	}
	return arr;
}

//putar(['a','b','c','d','e']);