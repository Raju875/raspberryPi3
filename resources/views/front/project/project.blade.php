@extends('front.master')

@section('title')
    Service
@endsection

@section('body')
    <section id="services">
        <div class="container">
            <div class="row">
                        <h2>Abstract :</h2>
                <p style="font-size: 16px">      Git is the modern way of version controlling. Developers often develop their projects in team. So the entire project is divided into several parts and assigned to different programmers. Each member is responsible for their own tasks. Members complete their parts and combine all the codes done by them in one place to bring completeness of their project. But if there were no git then above tasks have to be done manually which might cause many problems. Sometimes it makes more complicated when a portion of codes needs to be updated.  From above difficulties, the idea of version controlling comes. Using version controlling, revisions, modifications can be done with ease with just network connections. Now-a-days developers are well aware about online git sites like github, gitlab, bitbucket. Almost everyone use them to keep tracking the project with other members. However, sometimes some projects become confidentials. They need to be developed in private space. Often some developers do not want to use the online repository system given by other git sites. They feel the importance of having own places to push-pull codes. To solve these kind of problems, our idea of private git server comes. </p>

                <p style="font-size: 16px">Our local git server is based on raspberry pi 3. Raspberry pi 3 has 1 GB RAM along with quad core processor. It has built-in wifi which can be used to make instant wifi hot-spot to let other devices to connect with the pi. Although it has no built in storage, but microSD card can be used. Our device has 32GB storage. Raspbian jessie has been installed in it. Raspbian is distro based on debian for Raspberry Pi. As a result, it is a light OS and our installed programs can be run in it easily. Gitlab Community Edition has been installed in it. When the device is turned on, it automatically enable the wifi hotspot and let other devices connected with it on its git server by IP address. Developers can then use the git server by it&rsquo;s IP as they use other online git servers.</p>

                <p style="font-size: 16px">Specialities of the our device are quite unique and significant. It is portable that gives its user advantages of carrying it anywhere.It enables the wifi hotspot and start apache server automatically. It does not consume much battery. Data stays private and secure as it does not be connected to the internet. More importantly, it is affordable. Students can easily buy it and can use it as their personal learning. So, above services can not be found in outhe online git sites. That makes this device more important to developers to have. </p>

                <p style="font-size: 16px">We will be updating our projects with time. We already have some plans. We will be adding face recognition login system for users when they have computers/laptops/mobile with camera. When user enters to the login page, they will be asked to capture a photo. Then face recognition system will be looking for the person in the databases. If found, the user will be permitted to login without providing any more credentials. Moreover, many more featured will be added later.</p>

                <p>  </p>


            </div>
        </div>
    </section>
@endsection