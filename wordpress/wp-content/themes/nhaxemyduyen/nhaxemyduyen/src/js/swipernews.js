// Danh sách bài viết (18 bài để có 2 trang)
const posts = [
  {
    title:
      "Vì sao TP.HCM di dời 11 tuyến xe khách từ Bến xe Miền Đông cũ sang bến mới",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
  {
    title:
      "Xe khách liên tỉnh hoạt động trở lại, thí điểm từ ngày 13/10 - Nhịp sống kinh tế Việt..",
    description:
      "Thành phố là một nguồn năng lượng quan trọng trong cả cụm sự năng động của Việt Nam, đặc biệt là nghị định...",
    image: "/assets/image/tintuc1.png",
  },
];

const postsPerPage = 9; // Số bài viết mỗi trang (9 bài)
const totalPages = Math.ceil(posts.length / postsPerPage); // Tổng số trang
let currentPage = 1;

// Hiển thị bài viết theo trang
function displayPosts(page) {
  const start = (page - 1) * postsPerPage;
  const end = start + postsPerPage;
  const postsToShow = posts.slice(start, end);

  const postsContainer = document.getElementById("posts");
  postsContainer.innerHTML = "";

  postsToShow.forEach((post) => {
    const postElement = `
                    <div class=" flex flex-col justify-center bg-white overflow-hidden">
                        <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover
                        xl:w-[336px] xl:h-[208px] rounded-lg">
                        <div class="p-4 xl:w-[327px]">
                            <h3 class="text-lg font-poppins">${post.title}</h3>
                            <p class="text-gray-600">${post.description}</p>
                        </div>
                    </div>
                `;
    postsContainer.innerHTML += postElement;
  });

  updatePagination(page);
}

// Tạo nút phân trang
function createPagination() {
  const paginationContainer = document.getElementById("pagination");
  paginationContainer.innerHTML = "";

  // Nút Previous
  const prevBtn = document.createElement("span");
  prevBtn.className = `nav-btn flex items-center justify-center bg-gray-200 text-black p-2 ${
    currentPage === 1
      ? "bg-gray-100 text-gray-400 cursor-not-allowed"
      : "hover:bg-gray-300"
  }`;
        prevBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
        </svg>
        `; // Mũi tên trái
  prevBtn.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      displayPosts(currentPage);
    }
  });
  paginationContainer.appendChild(prevBtn);

  for (let i = 1; i <= totalPages; i++) {
    const btn = document.createElement("span");
    btn.className = `pagination-btn p-2 ${
      i === currentPage ? "bg-[#6BA144] text-white" : "bg-gray-200 text-black"
    }`;
    btn.textContent = i.toString().padStart(2, "0");
    btn.addEventListener("click", () => {
      currentPage = i;
      displayPosts(currentPage);
    });
    paginationContainer.appendChild(btn);
  };

  // Nút Next
            const nextBtn = document.createElement("span");
            nextBtn.className = `nav-btn flex items-center justify-center bg-gray-200 text-black p-2   ${currentPage === totalPages ? "bg-gray-100 text-gray-400 cursor-not-allowed" : "hover:bg-gray-300"}`;
            nextBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
            `; // Mũi tên phải
            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    displayPosts(currentPage);
                }
            });
            paginationContainer.appendChild(nextBtn);
}



// Cập nhật trạng thái nút phân trang
function updatePagination(page) {
  const buttons = document.querySelectorAll(".pagination-btn");
  buttons.forEach((btn, index) => {
    const isActive = index + 1 === page;
    btn.className = `pagination-btn flex items-center justify-center  ${
      isActive ? "bg-[#6BA144] text-white" : "bg-gray-200 text-black"
    }`;
  });

  // Cập nhật trạng thái nút Previous và Next
  const prevBtn = document.querySelector(".nav-btn:first-child");
  const nextBtn = document.querySelector(".nav-btn:last-child");
  
}

// Khởi tạo
displayPosts(currentPage);
createPagination();
