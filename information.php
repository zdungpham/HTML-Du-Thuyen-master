<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thông Tin Nhân Viên Tàu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* CSS styles go here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #f4f4f4;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<?php include("html/header.html");?>
    <section id="kinhnghiem">
        <h2>Kinh Nghiệm Làm Việc</h2>
        <p>Thông tin về kinh nghiệm làm việc của nhân viên tàu sẽ được cung cấp ở đây:
             
        
        </p>
           <a>Nguyễn Văn A:Thuyền Trưởng với 18 năm kinh nghiệm </a>
        <p>
            <a>Vũ Thị B :Thuyền Viên với 10 năm kinh nghiệm </a> 
        </p>
       
       
        <p><a>Dương Văn C:Thuyền Viên với 7 năm kinh nghiệm</a></p>
        <p>Nguyễn Thị D:Thuyền Viên với 5 năm kinh nghiệm </a></p>
       <p><a> Vũ Văn E:Thuyền Viên với 5 năm kinh nghiệm </a></p>


    </section>
    <section id="dieukhoan">
        <h2>Điều Khoản</h2>
        <p>Thông tin về các điều khoản liên quan đến công việc của nhân viên tàu sẽ được hiển thị ở đây.</p>

        <p>1. Giới thiệu

            Chào mừng quý khách hàng đến với website chúng tôi.
            
            Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.
            
            Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</p>
        <p>2. Thanh toán an toàn và tiện lợi

            Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:
            
            Cách 1: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)
            Cách 2: Thanh toán sau (COD – giao hàng và thu tiền tận nơi)
            Cách 3: Thanh toán online qua thẻ tín dụng, chuyển khoản</p>
    </section>
    <section id="hoidap">
        <h2>Hỏi Đáp</h2>
        <p>Các câu hỏi thường gặp và câu trả lời sẽ được hiển thị ở đây.</p>
        <p> Câu hỏi 01: Du thuyền có những phân khúc về giá như thế nào?</p>

            <p>Câu hỏi 02: Những phân khúc du thuyền hiện tại  đang phân phối là như thế nào?</p>
            <p>Câu hỏi 03: Mua du thuyền để kinh doanh thì có hợp lý không?</p>
            <p>Câu hỏi 04: Chơi du thuyền ở sông hay ở biển thì thích hơn? Hà Nội có chơi du thuyền được không?</p> 
            <p>Câu hỏi 05: Xây dựng bến đỗ du thuyền thì cần những thủ tục và chi phí như thế nào?</p>
            <p>Câu hỏi 06: Có bao nhiêu nhà phân phối Du thuyền  hiện đang nằm ở vị trí nào?</p>
            
            
    </section>
    <section id="lienhe">
        <h2>Liên Hệ</h2>
        <p>Thông tin liên hệ của nhân viên tàu:</p>
        <ul>
            <li>Email: example@example.com</li>
            <li>Số điện thoại: 0123-456-789</li>
        </ul>
    </section>
    <?php include("html/footer.html");?>
</body>
</html>