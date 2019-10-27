document.addEventListener("DOMContentLoaded", function(){
	function capnhat(id, value) {
		let itemID = id;
		let changeValue = value;
		// console.log(itemID + " " + updateVal);
		// --- Chưa có lỗi xảy ra
	}

	let soLuong = document.querySelectorAll('.quantity');

	for(let i = 0; i < soLuong.length; i++) {
		soLuong[i].addEventListener('change', function(){
			capnhat(soLuong[i].id, soLuong[i].value);
		});
	}
});