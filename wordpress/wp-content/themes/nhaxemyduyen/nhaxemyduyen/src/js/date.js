// Thêm flatpickr JS qua CDN
document.addEventListener("DOMContentLoaded", () => {
  // Lấy ngày hiện tại và ngày mai
  const today = new Date();
  const tomorrow = new Date(today);
  tomorrow.setDate(today.getDate() + 1);

  // Định dạng ngày theo "DD.MM.YYYY"
  const formatDate = (date) => {
    const day = String(date.getDate()).padStart(2, "0");
    const month = String(date.getMonth() + 1).padStart(2, "0"); // Tháng bắt đầu từ 0
    const year = date.getFullYear();
    return `${day}.${month}.${year}`;
  };

  // Gán giá trị mặc định cho input
  const dateFromInput = document.getElementById("datefrom");
  const dateToInput = document.getElementById("dateto");
  dateFromInput.value = formatDate(today);
  dateToInput.value = formatDate(tomorrow);

  // Khởi tạo flatpickr cho "Ngày đi"
  flatpickr(dateFromInput, {
    dateFormat: "d.m.Y", // Định dạng ngày DD.MM.YYYY
    minDate: "today", // Không chọn ngày trước hôm nay
    defaultDate: today, // Giá trị mặc định là hôm nay
  });

  // Khởi tạo flatpickr cho "Ngày đến"
  flatpickr(dateToInput, {
    dateFormat: "d.m.Y",
    minDate: "today", // Không chọn ngày trước hôm nay
    defaultDate: tomorrow, // Giá trị mặc định là ngày mai
    
  });

  // Mở lịch khi nhấp vào biểu tượng
  document.getElementById("calendarFromIcon").addEventListener("click", () => {
    dateFromInput._flatpickr.open();
    console.log('Click me!')
  });

  document.getElementById("calendarToIcon").addEventListener("click", () => {
    dateToInput._flatpickr.open();
  });
});
