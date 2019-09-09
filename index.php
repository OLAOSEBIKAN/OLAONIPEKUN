<?php
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['title'];
    $content = $_POST['subject'];

    $saveFile = 'message.txt';

    file_put_contents($saveFile, 'Name : '.$name. ' Email : '.$email.' Subject : '.$subject.' Content : '.$content."\r\n",
    FILE_APPEND);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <style>
        img {
            border-radius: 150%;
            border-style: hidden;
            width: 150px;
            height: 150px;
        }

        .tr {
            text-align: right;
        }

        .tl {
            text-align: left;
        }

        th {
            color: darkcyan;

        }

        table {
            width: 100%;
        }

        .silver-background {
            background-color: honeydew;
        }

        body {
            width: 80%;
            margin-right: 10%;
            margin-left: 10%;

        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=email],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td>
                <strong>
                    <h1>
                        OLAONIPEKUN OLAITAN OLAJUWON
                    </h1>
                    <span>
                        Motivated web developer and designer with experience creating custom websites through Jinja2
                        and Python. <br>
                        Well-known collaborator with proven track record creating web apps with Django and
                        Flask.
                        Well-versed in HTML, CSS, <br> Python, GCP,and SQLAlchemy. Pursuing a developer position in a
                        fast
                        paced environment focused on customer experience.
                    </span>
                </strong>
            </td>
            <td>
                <img src="https://res.cloudinary.com/sir-lighton/image/upload/v1566507311/IMG_20190813_133937_877_1_nsfncl.jpg"
                    alt="My Photo">
            </td>
        </tr>
    </table>


    <address class="tr" width="80%">
        <strong>
            Akobo-Ojurin, Akobo Ibadan,<br>
            OYO STATE.<br>
            08102513640.<br>
            Email: <a href="">olaonipekunolaitan@gmail.com</a>.<br>
        </strong>
    </address><br>


    <table class="silver-background">
        <tr>
            <th class="tl">EXPERIENCE</th>
            <th class="tr">SKILLS</th>
        </tr>

        <tr>
            <td class="tl">
                <ul>
                    <li><b>Ar Risalaah Academy.</b><br>
                        ICT Instructor (December 2018 – June 2019)</li>
                    <li><b>The Broadcasting Cooperation of OYO State.</b><br>
                        Industrial Training (May – Nov 2016).</li>
                    <li><b>Broad-vision software ventures.</b><br>
                        ICT Instructor (Dec 2011 till Oct 2013)</li>
                </ul>
            </td>
            <td class="tr">
                <span>
                    <b>
                        Strong Work Ethic.<br>
                        Good Communication Skill.<br>
                        Problem Solving Skill.<br>
                        Team Player.<br>
                        Detail Oriented.<br>
                        Detail Oriented.
                    </b>
                </span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="tl">EDUCATION</th>
            <th class="tr">TECHNICAL SKILLS</th>
        </tr>

        <tr>
            <td class="tl">
                <ul>
                    <li><b>July 2018 - July 2019. National Youth Service Corps(NYSC)</b></li>
                    <li><b>February 2018 - International English Language Testing System(IELTS)</b><br>
                        Band Score 7.0.</li>
                    <li><b>August 2017- B.Sc computer science Hons. – Olabisi Onabanjo
                            University.</b></li>
                    <li><b>Oct 2013 - Certificate of completion – Almarouf Computers</b><br>
                        IT Support.<BR>
                        Computer engineering.</li>
                </ul>
            </td>
            <td class="tr">
                <span>
                    <b>
                        Google Cloud Platform.<br>
                        Python: Django, Flask.<br>
                        Restful Apis<br>
                        Jinja2.<br>
                        SqlAlchemy.<br>
                        Version Control.<br>
                    </b>
                </span>
            </td>
        </tr>
    </table>
    <table class="silver-background">
        <tr>
            <th class="tl">PROJECTS</th>
            <th class="tr">OPERATING SYSTEMS</th>
        </tr>
        <tr>
            <td class="tl">LinkedIn: <a href="">www.linkedin.com/in/olaonipekunolaitan</a> <br>
                GitHub: <a href="">https://github.com/OLAOSEBIKAN</a></td>
            <td class="tr">WINDOWS OS.<br>MAC OS</td>
        </tr>

    </table>
    <table class="silver-background">
        <tr>
            <th class="tl">HOBBY</th>
            <th class="tr">AWARDS</th>
        </tr>
        <tr>
            <td class="tl">Basketball.<br>
                Traveling.<br>
            </td>
            <td class="tr"><b>Award of excellence:</b><br> Nysc servicom CDS group <br> Public Relations Officer.
                <br>(July 2019)
            </td>
        </tr>
    </table>
    
    <div text-align="center" > <h1>Contact Me</h1></div>
    <div>
        <div class="container">
            <form method="Post" action="index.php">

                <label for="fname">Name</label>
                <input class="nonum" type="text" id="fname" name="name" placeholder="Your name.." required minlength="4" ><br>

                <label for="Email">Email</label>
                <input type="email" id="Email" name="email" placeholder="Email Address" required><br>

                <label for="Email">Title</label>
                <input class="nonum" type="text" id="title" name="title" placeholder="Title" required ><br>

                <label for="subject">Message</label>
                <textarea id="subject" name="subject" placeholder="Write something.."
                style="height:200px" required minlength="20"></textarea><br>

                <input id="submit" type="submit" value="Submit" name="send" >

            </form>
        </div>
    </div>

</body>

</html>