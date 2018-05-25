@extends('front.master')

@section('title')
    Portfolio
@endsection

@section('body')
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:#3680C1">Raspberry Pi3</h2>
                    <hr/>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-file fa-stack-1x fa-inverse"></i></span>
                    <h4 class="service-heading">Raspberry Pi3</h4>
                    <p class="text-muted"> The Raspberry Pi is a series of small single-board computers developed in the United Kingdom by the Raspberry Pi Foundation to promote the teaching of basic computer science in schools and in developing countries.</br>
                        Power: 1.5 W (average when idle) to 6.7 W (maximum under stress)</br>
                        CPU: 1.2 GHz 64/32-bit quad-core ARM Cortex-A53</br>
                        Storage: MicroSDHC slot</br>
                        Memory: 1 GB LPDDR2 RAM at 900 MHz</br>
                        System-on-chip used: Broadcom BCM2837</br>
                        Release date: February 29, 2016</br>
                        To know more visit ...  <a href="https://www.raspberrypi.org">www.raspberrypi.org</a></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span>
                    <h4 class="service-heading">GitHub</h4>
                    <p class="text-muted">GitHub is a Web-based Git version control repository hosting service. It is mostly used for computer code. It offers all of the distributed version control and source code management functionality of Git as well as adding its own features.</br>
                        Founder: <a href="https://www.google.com/search?q=Tom+Preston-Werner&rlz=1C1CHBF_enBD772BD772&oq=Tom+Preston-Werner&aqs=chrome..69i57j0l5.1598j0j4&sourceid=chrome&ie=UTF-8"> Tom Preston-Werner</a></br>
                        Founded: 2008</br>
                        Headquarters: San Francisco, California, United States</br>
                        To know more visit ...  <a href="https://github.com/">www.github.com</a></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="	fa fa-bank fa-stack-1x fa-inverse"></i></span>
                    <h4 class="service-heading">Server</h4>
                    <p class="text-muted">In computing, a server is a computer program or a device that provides functionality for other programs or devices, called "clients". This architecture is called the client–server model, and a single overall computation is distributed across multiple processes or devices. Servers can provide various functionalities, often called "services", such as sharing data or resources among multiple clients, or performing computation for a client. A single server can serve multiple clients, and a single client can use multiple servers. A client process may run on the same device or may connect over a network to a server on a different device.[1] Typical servers are database servers, file servers, mail servers, print servers, web servers, game servers, and application servers.</br>
                        To know more visit ...  <a href="https://en.wikipedia.org/wiki/Server_(computing)">Server Wikipedia Search</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection