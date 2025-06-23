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
  
  <div class="container">
  <div class="section">
      <div>
          <img src="eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" style="width: 500px; height: 500px" alt="Image 1">
      </div>
      <div class="text-section">
          <h2 class="fw-bolder">APA SAJA MAKANAN KHAS<br> NUSANTARA?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.
          <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.</p>
          <br>
          <div class="d-grid gap-3 d-md-block">
            <a href="/dasboard" class="block bg-yellow-500 text-white text-center mt-2 py-2 rounded">KEMBALI HALAMAN DASBOARD</a>
          </div>
      </div>
  </div>
  </div>