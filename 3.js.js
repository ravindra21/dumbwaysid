function printPattern(angka) {
	let center = Math.ceil(angka/2);
	let bintang=Array(center-1).fill('*');
	let kosong= [' '];
	let awal = bintang.concat('*',bintang).join('');
	let loop = angka-3

	console.log(awal);
	for(let i=1;i<=loop;i++){
		console.log(bintang.concat(kosong,bintang).join(''));
		if(i<Math.ceil(loop/2)){
			kosong.push(' ');
			kosong.push(' ');
			bintang.pop();
		}
		else if(i>Math.ceil(loop/2)) {
			kosong.pop();
			kosong.pop();
			bintang.push('*');
		}else{
			let kosong2 = kosong.slice();
			let bintang2 = bintang.slice();

			kosong2.push(' ');
			kosong2.push(' ');
			bintang2.pop();
			if(angka >= 15){
				let dw = 'DUMBWAYSID'.split('');
				let awal = Array( Math.ceil( (kosong2.length-dw.length)/2) ).fill(' ');
				let akhir = Array(kosong2.length-dw.length-awal.length).fill(' ');
				console.log(bintang2.concat(awal,dw,akhir,bintang2).join(''));
			} else {
				console.log(bintang2.concat(kosong2,bintang2).join(''));
			}
		}
	}
	console.log(awal);
}

//printPattern(15);