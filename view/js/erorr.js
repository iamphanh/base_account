
function openErrorPopup() {
    event.preventDefault();
    const errorPopup = document.getElementById('error-popup');
    const errorMessageElement = document.getElementById('error-message');

    fetch(`http://localhost/base_account/?action=loginUser`, {
        method: 'POST'
    })
        .then(response => response.json())
        .then(data => {
            const errorMessage = data.error_message;
            errorMessageElement.innerText = errorMessage;
            errorPopup.style.display = 'block';
        })
        .catch(error => {
            errorMessageElement.innerText = 'Lỗi khi lấy thông báo lỗi từ máy chủ';
            errorPopup.style.display = 'block';
        });
}

function closeErrorPopup() {
    const errorPopup = document.getElementById('error-popup');
    errorPopup.style.display = 'none';
}

// Đưa giá trị errorMessage vào phần tử có id là "error-msg"
var errorMessage = "";
document.getElementById('error-msg').innerText = errorMessage;

