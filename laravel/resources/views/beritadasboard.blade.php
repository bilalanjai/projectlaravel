<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewsDashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>
    
    <style>
        .container {
          max-width: 1200px;
          margin: auto;
          padding: 20px;
      }
      
      .section {
          display: flex;
          justify-content: space-between;
          align-items: flex-start;
          gap: 20px;
          background-color: #fff;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      
      .section img {
          width: 100%;
          max-width: 460px;
          height: auto;
          object-fit: cover;
          border-radius: 10px;
      }
      
      .text-section {
          flex: 1;
          padding-left: 20px;
      }
      
      .text-section h2 {
          font-size: 18px;
          margin-top: 15%;
          margin-bottom: 15px;
          line-height: 1.3;
      }
      
      .text-section p {
          font-size: 14px;
          line-height: 1.6;
      }
      
      .text-section button {
          padding: 10px 20px;
          background-color: #000;
          color: #fff;
          border: none;
          cursor: pointer;
          font-style: italic;
      }
      
      @media (max-width: 1024px) {
          .section {
              flex-direction: column;
              text-align: center;
          }
      
          .section img {
              max-width: 100%;
              margin-bottom: 20px;
          }
      
          .text-section {
              padding-left: 0;
          }
      
          .text-section h2 {
              font-size: 24px;
          }
      
          .text-section p {
              font-size: 14px;
          }
      }
      
      @media (max-width: 768px) {
          .section {
              padding: 15px;
          }
      
          .text-section h2 {
              font-size: 22px;
          }
      
          .text-section p {
              font-size: 13px;
          }
      }
      
      @media (max-width: 576px) {
          .text-section h2 {
              font-size: 20px;
          }
      
          .text-section p {
              font-size: 12px;
          }
      
          .text-section button {
              width: 100%;
          }
      }
      </style>
      
      <div class="container mx-auto px-4 py-6">
        <div class="section flex flex-col md:flex-row items-center gap-8">
            <!-- Gambar -->
            <div>
                <img src="eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" style="width: 500px; height: 500px" alt="Image 1" class="rounded-lg shadow-lg">
            </div>
    
            <!-- Teks -->
            <div class="text-section">
                <h2 class="fw-bolder text-2xl font-bold mb-4">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. 
                    Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur 
                    facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac 
                    sem commodo, at posuere eros consequat.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. 
                    Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur 
                    facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac 
                    sem commodo, at posuere eros consequat.
                </p>
    
                <!-- Tombol -->
                <div class="flex flex-col md:flex-row gap-4 mt-6">
                    <a href="/dasboard" class="text-white bg-blue-600 hover:bg-blue-800 font-medium py-2 px-4 rounded-lg shadow-lg text-center">
                        Kembali ke Dashboard
                    </a>
                    <a href="/berita" class="text-blue-600 bg-white hover:bg-gray-100 border-2 border-blue-600 font-medium py-2 px-4 rounded-lg shadow-lg text-center">
                        View News
                    </a>
                </div>
            </div>
        </div>
    </div>    
    
</body>
</html>