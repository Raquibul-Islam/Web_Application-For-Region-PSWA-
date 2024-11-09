<!DOCTYPE html>
<html>
<head>
    <title>PSWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 900px;
            height: 60%;
            width: 50%;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        header {
            background-color: #004080;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        #ceo-photo {
            text-align: center;
            margin-top: 30px;
        }

        #ceo-photo img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        #ceo-photo h3 {
            margin-top: 15px;
            font-size: 24px;
            color: #004080;
        }

        #mission-vision {
            background-color: #f5f5f5;
            padding: 50px 20px;
            text-align: center;
        }

        #mission-vision h2 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #004080;
            letter-spacing: 1px;
        }

        #mission-vision p {
            text-align: justify;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.6;
            font-size: 18px;
            color: #333;
        }

        #other-info {
            background-color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        #other-info h2 {
            font-size: 26px;
            color: #004080;
            margin-bottom: 20px;
        }

        #other-info ul {
            list-style-type: none;
            padding: 0;
            max-width: 600px;
            margin: 0 auto;
        }

        #other-info ul li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        #other-info ul li span {
            font-weight: bold;
            color: #333;
        }

        footer {
            background-color: #004080;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 16px;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
            padding: 0;
            font-size: 16px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Mobile Styling */
        @media only screen and (max-width: 768px) {
            header {
                font-size: 24px;
            }

            #ceo-photo img {
                width: 160px;
                height: 160px;
            }

            #mission-vision {
                padding: 30px 15px;
            }

            #mission-vision p {
                font-size: 16px;
            }

            #other-info {
                padding: 30px 15px;
            }

            footer {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            Pirojpur Students Welfare Association (PSWA)
        </header>

        <div id="ceo-photo">
            <img src="./Photos/rakib1.jpg" alt="CEO Photo">
            <h3>Rakibul Islam</h3>
        </div>

        <div id="mission-vision">
            <h2>Mission and Vision</h2>
            <p>Our mission at the Pirojpur Students Welfare Association is to foster educational and social development among the students of Pirojpur. We aim to create a community where students can support each other, share knowledge, and build networks that will help them in their academic and professional lives.</p>
            <br/>
            <p>The vision of PSWA is to become a leading organization that empowers students through a collaborative platform where they can develop leadership skills, contribute to society, and uplift the entire student community of Pirojpur. We strive for a future where no student is left behind, and every student has access to resources, guidance, and opportunities that will help them succeed in all facets of life.</p>
        </div>

        <div id="other-info">
            <h2>Contact Information</h2>
            <ul>
                <li><span>Location:</span> 103 A block, Bangabandhu Hall, PSTU</li>
                <li><span>Phone:</span> 01521549873</li>
                <li><span>Email:</span> sazzad17@cse.pstu.ac.bd</li>
                <li><span>Website:</span> <a href="http://portfolio.rakibulislam.tech">portfolio.rakibulislam.tech</a></li>
            </ul>
        </div>

        <footer>
            <p>&copy; 2024 PSWA. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
