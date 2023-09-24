document.getElementById('editButton').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'block';
});

document.getElementById('cancelButton').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
});


const editButton = document.getElementById('editButton');
const popup = document.getElementById('popup');
const saveButton = document.getElementById('saveButton');
const cancelButton = document.getElementById('cancelButton');

// Kiểm tra xem popup đã được hiển thị trước đó
const isPopupDisplayed = localStorage.getItem('popupDisplayed');

if (isPopupDisplayed) {
    // Nếu popup đã hiển thị trước đó, ẩn nó bằng cách loại bỏ lớp CSS "hidden"
    popup.classList.remove('hidden');
} else {
    // Nếu popup chưa hiển thị trước đó, thêm lớp CSS "hidden" để ẩn nó
    popup.classList.add('hidden');
}

editButton.addEventListener('click', () => {
    // Khi ấn nút "Chỉnh sửa thông tin," hiển thị popup và đánh dấu rằng popup đã hiển thị
    popup.classList.remove('hidden');
    localStorage.setItem('popupDisplayed', 'true');
});

saveButton.addEventListener('click', () => {
    // Đóng popup khi ấn nút "Lưu Thay Đổi" và xóa giá trị popupDisplayed
    popup.classList.add('hidden');
    localStorage.removeItem('popupDisplayed');
});

cancelButton.addEventListener('click', () => {
    // Đóng popup khi ấn nút "Hủy" và xóa giá trị popupDisplayed
    popup.classList.add('hidden');
    localStorage.removeItem('popupDisplayed');
});




