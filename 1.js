function tentukanOlahraga(kal) {
	let olahraga = 'renang';
	console.log('Jumlah Kalori: '+kal);
	if(kal > 750){
		olahraga = 'lari';
	} else if(kal > 500) {
		olahraga = 'badminton'
	}
	console.log('Jenis Olahraga: '+olahraga);
	console.log('Waktu Olahraga: '+kal/20+' menit');
}

//tentukanOlahraga(60);
