<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ATC Tech Limited</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="/asset/icon/ATC logo-02.png" type="image/png">

        <!-- Styles -->
      
         @vite('resources/css/app.css')
    </head>

    <body>
        <header class=" md:min-h-[700px]    text-white ">
            <section class="absolute z-10 w-full  bg-opacity-80  
            bg-gradient-to-b from-slate-800">
                <nav class="flex flex-col lg:flex-row md:justify-around md:items-center p-4    ">
                    <div>
                        <img class="w-32 mx-auto md:mx-0 md:w-60" src="/asset/icon/ATC-Logo-white.png" alt="ATC-logo">
                    </div>
                    <div>
                        <ul
                            class="  lg:p-0 flex flex-row justify-between    flex-wrap md:flex-row gap-2 md:gap-5 md:text-xl md:font-medium text-xs  ">
                            <li class="hover:font-bold hover:text-sky-700"><a href="#">Home</a></li>
                            <li class="hover:font-bold hover:text-sky-700"><a href="#">Current Openings</a></li>
                            <li class="hover:font-bold hover:text-sky-700"><a href="#">About US</a></li>
                            <li class="hover:font-bold hover:text-sky-700"><a href="#">Contact Us</a></li>
                            <li class="hidden md:block  "><a href="#">
                                    <img class="w-9 p-2 rounded-full bg-[#0F79B9] hover:bg-teal-700"
                                        src="/asset/icon/search-alt-svgrepo-com.svg" alt=""></a>
                            </li>
    
                        </ul>
                    </div>
                </nav>
                <!-- HERO Section -->
                <section class="flex items-center justify-center z-10 min-h-[400px]  md:min-h-[600px] ">
                    <div class="md:max-w-7xl md:mx-auto w-full text-center space-y-4">
                        <h2 class="md:text-6xl text-2xl ">
                            <span class="font-light">Innovate,</span>
                            <span class="font-bold text-[#0f79b9]">Create</span>
                            <span class="font-light">, Elevate</span>
                        </h2>
                        <h2 class="md:text-6xl text-xl font-bold">
                            Your Digital Journey Starts Here.
                        </h2>
                        <div
                            class="flex gap-4 justify-center items-center text-xs md:text-lg py-2 md:py-4 divide-x-2 md:min-h-28  ">
                            <h3 class="">7+ years <br> experience</h3>
    
                            <h3 class="pl-4">24/7 Customer <br> Support</h3>
                        </div>
                        <button class=" text-white bg-[#0f79b9] hover:bg-gray-500 md:text-2xl md:font-semibold p-2 md:px-4 md:py-3 rounded-lg shadow-xl 
                            flex gap-2 items-center mx-auto ">Contact
                            US <span><img class=" w-5 md:w-10" src="/asset/icon/arrow.svg" alt=""></span></button>
                    </div>
                </section>
            </section>
            <!-- carusol start -->
            <section class="  relative  w-full -z-0">
                <div class=" h-[510px]  md:h-[700px] w-full overflow-hidden flex flex-nowrap text-center" id="slider">
                    <div class=" flex-none w-full flex flex-col items-center justify-center">
                        <img src="/asset/background/hacker-dark-room-image.jpg" alt="">
                    </div>
                    <!-- <div class=" flex-none w-full flex flex-col items-center justify-center">
                        <img src="./asset/background/Carousel-image-3.jpg" alt="">
                    </div> -->
                    <div class=" flex-none w-full flex flex-col items-center justify-center">
                        <img src="/asset/background/robot-working-office-instead-humans.jpg" alt="">
                    </div>
                </div>
            </section>
            <!-- carusol end -->
        </header>
    
    
        <main class="w-full">
            <!-- Benefits Section -->
            <section class="pb-10 p-4  lg:mt-10">
                <div class="text-center space-y-6 pb-14 max-w-6xl mx-auto">
                    <h2 class="md:text-4xl text-3xl font-semibold"> <span class="text-[#0f79b9]">Unleash</span> Your
                        Business Potential with ATC Tech Ltd
                    </h2>
                    <p class="md:text-lg font-normal text-justify ">
                        Experience a transformative journey with our
                        comprehensive services. Gain a competitive edge with our innovative solutions, boost productivity
                        and efficiency, achieve ambitious business goals, reduce costs, save time, and empower your team.
                        With personalized strategies, proven expertise, and measurable results, partner with ATC Tech Ltd.
                        for lasting success. Contact us now to discover the difference we can make for your business!
                    </p>
                </div>
                <!-- container -->
                <div class="grid lg:grid-cols-3 md:grid-cols-2 max-w-6xl mx-auto md:gap-14 gap-8">
                    <!-- card 1 -->
                    <div class="text-center p-8 border-t-8 rounded-2xl border-[#0f79b9]  shadow-2xl space-y-2">
                        <img class="w-14 my-4 mx-auto" src="/asset/icon/terminal-svgrepo-com.svg" alt="terminal-icon">
                        <h2 class="font-semibold text-xl">Tailored Software Solutions</h2>
                        <p class=" text-justify tracking-tighter leading-relaxed  ">
                            Our software development services are customized to meet the unique needs of each client,
                            ensuring that the final product aligns perfectly with their requirements and objectives.
                        </p>
                    </div>
                    <!-- card 2 -->
                    <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                        <img class="w-14 my-4 mx-auto  rounded-2xl " src="/asset//icon/bot.svg" alt="terminal-icon">
                        <h2 class="font-semibold text-xl">Cutting-edge AI Solutions</h2>
                        <p class="text-justify tracking-tighter leading-relaxed ">
                            Our artificial intelligence solutions enable businesses to harness the power of advanced
                            algorithms and data analytics to optimize processes, make data-driven decisions, and gain a
                            competitive edge in their industry.
                        </p>
                    </div>
                    <!-- card 3 -->
                    <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                        <img class="w-14 my-4 mx-auto" src="/asset/icon/shield-check-svgrepo-com.svg" alt="terminal-icon">
                        <h2 class="font-semibold text-xl">Robust Security Measures</h2>
                        <p class="text-justify tracking-tighter leading-relaxed ">
                            With our expertise in software and network security, customers can rest assured that their
                            sensitive data and systems are protected against cyber threats, breaches, and unauthorized
                            access.
                        </p>
                    </div>
                    <!-- card 4 -->
                    <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                        <img class="w-14 my-4 mx-auto" src="/asset/icon/cloud-check-svgrepo-com.svg" alt="terminal-icon">
                        <h2 class="font-semibold text-xl">Scalable Cloud Services</h2>
                        <p class="text-justify tracking-tighter leading-relaxed ">
                            Our cloud services empower organizations to leverage the flexibility, scalability, and
                            cost-efficiency of cloud computing, enabling them to adapt to changing business needs and
                            accelerate digital transformation initiatives.
                        </p>
                    </div>
                    <!-- card 5 -->
                    <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                        <img class="w-14 my-4 mx-auto" src="/asset/icon/box-minimalistic-svgrepo-com.svg"
                            alt="terminal-icon">
                        <h2 class="font-semibold text-xl">Streamlined DevOps Practices</h2>
                        <p class="text-justify tracking-tighter leading-relaxed ">
                            By bridging the gap between development and operations, our DevOps expertise fosters a seamless
                            workflow, leading to quicker deployments, robust software quality, and a faster path to market
                            success.
                        </p>
                    </div>
                    <!-- card 6 -->
                    <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                        <img class="w-14 my-4 mx-auto"
                            src="/asset/icon/problem-solving-fix-offer-solution-solve-svgrepo-com.svg" alt="terminal-icon">
                        <h2 class="font-semibold text-xl">Innovative IoT Solutions</h2>
                        <p class=" text-justify tracking-tighter leading-relaxed ">
                            We enable businesses to capitalize on the Internet of Things by designing and implementing IoT
                            solutions that enhance connectivity, efficiency, and automation across various devices and
                            platforms.
                        </p>
                    </div>
                </div>
            </section>
    
            <!-- Extra section -->
            <section>
                <div
                    class=" md:max-w-6xl w-fit  md:mt-8 px-4 md:px-10 py-4 rounded-lg lg:mx-auto mx-4 bg-[url('/public/asset/background/stacked.svg')] shadow-2xl  ">
                    <div class=" text-white   mx-auto py-10 max-w-6xl flex justify-center items-center  ">
                        <h2
                            class="w-full font-medium md:font-semibold md:text-3xl text-xl text-justify tracking-tight leading-normal">
                            We don't just speak the language of technology, we translate it into tangible results. That's
                            what makes ATC Tech Limited different . . .
                        </h2>
                    </div>
                </div>
            </section>
    
            <!-- Our services -->
            <section class="   pb-10  p-4 ">
                <div class="text-center py-14 space-y-4">
                    <h1 class="text-4xl font-semibold">Our <span class="text-[#0F79B9]">Services</span></h1>
                    <p class="text-lg max-w-6xl mx-auto leading-relaxed text-justify    ">
                        For over 7 years, ATC Tech Limited has been dedicated to providing innovative and sustainable
                        solutions. Our team of skilled engineers is passionate about creating high-quality products that
                        meet your needs while minimizing environmental impact. We are committed to exceeding your
                        expectations and building long-lasting partnerships.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-4 text-left">
    
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg  ">
                        <img class="w-14   hover:ease-in-out ease-in-out "
                            src="/asset/icon/Ourservice_Icons/1.Software_Developement.png" alt="">
                        <h2 class="md:text-xl font-medium">Software Development</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/2.Web_Development.png" alt="">
                        <h2 class="md:text-xl font-medium">Web Development</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/3.Mobile_Application_Development.png" alt="">
                        <h2 class="md:text-xl font-medium w-fit">App Development</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/4.UI_UX_Design.png" alt="">
                        <h2 class="md:text-xl font-medium">UI/UX Design</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/5.Quality_Assurance_And_Testing.png" alt="">
                        <h2 class="md:text-xl font-medium">SQA & Testing</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/6.Artificial-Intelligence.png" alt="">
                        <h2 class="md:text-xl font-medium">Artificial Intelligence</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/7.Cloud-Service-Solution.png" alt="">
                        <h2 class="md:text-xl font-medium">Cloud Solution</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/8.Cyber-Security.png" alt="">
                        <h2 class="md:text-xl font-medium">Cyber Security</h2>
                    </div>
                    <div
                        class="flex   items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/9.Data_Analyst.png" alt="">
                        <h2 class="md:text-xl    font-medium">Data Analytics</h2>
                        <!-- & Business Intelligence -->
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/10.Consulting_Service.png" alt="">
                        <h2 class="md:text-xl font-medium">Consulting Services</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/11.Devops.png" alt="">
                        <h2 class="md:text-xl font-medium">Dev Ops</h2>
                    </div>
                    <div
                        class="flex  items-center justify-around gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                        <img class="w-14 " src="/asset/icon/Ourservice_Icons/12.graphic-design.png" alt="">
                        <h2 class="md:text-xl font-medium">Graphic Design</h2>
                    </div>
                </div>
            </section>
    
            <!-- What We Do Section -->
            <section class="  w-full flex flex-col md:flex-row items-center  lg:px-20   
                bg-[url('/public/asset/background/final.svg')] bg-no-repeat lg:bg-[length:100%] p-4   lg:h-[600px]       ">
                <section class="md:px-4 px-2  mx-auto w-full">
                    <div class="w-full mx-auto  text-center   md:w-11/12 xl:w-9/12 ">
                        <h1 class="p-2 md:p-4 mb-6 text-2xl   md:text-4xl md:tracking-tight">
                            <span
                                class="block w-full text-transparent italic md:text-justify text-left  leading-relaxed md:leading-relaxed bg-clip-text bg-gradient-to-r from-[#0F79B9] to-[#0F79B9] md:inline">
                                ATC Tech Ltd. delivers
                                tailored technology
                                solutions, from software
                                development to AI and cloud
                                services, empowering
                                Businesses to thrive in the
                                Digital Age.
                            </span>
                        </h1>
                        <button
                            class="hover:bg-[#0f79b9] shadow-2xl hover:text-white  font-semibold text-white md:text-black px-6 py-3 my-6 w-fit mx-auto rounded-lg border-b-2  ">Let’s
                            Connect </button>
                    </div>
                </section>
            </section>
    
            <!-- Our exparties -->
            <section class="w-full   ">
                <div class="md:max-w-6xl md:mx-auto text-center md:py-16 pt-8 pb-4   md:space-y-4 space-y-2">
                    <h1 class="text-4xl font-medium">Our <span class="text-[#0f79b9] font-bold"> Expertise</span></h1>
                    <p class="md:text-lg p-4 text-justify leading-relaxed">
                        With a proven track record of success in outsourcing projects for diverse clients across Singapore,
                        Malaysia, Dubai, and the USA, we possess a deep understanding of international business requirements
                        and cultural nuances. We are committed to fostering strong communication and collaboration,
                        regardless of location, to deliver exceptional results for your global organization.
                    </p>
                </div>
    
                <!-- container -->
                <div class="md:max-w-6xl md:mx-auto grid grid-cols-1 gap-10 p-4 lg:p-0  ">
    
                    <!-- card 1 -->
                    <div
                        class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]    flex md:flex-row flex-col    justify-between ">
                        <div class="md:w-1/2">
                            <img class=" rounded-l-lg w-full h-full object-cover" src="/asset/services/1_ChatBot.jpg"
                                alt="">
                        </div>
                        <div class="space-y-4 pt-4 p-6">
                            <h2 class="text-2xl font-semibold">Chatbots</h2>
                            <p class="text-sm md:text-base leading-relaxed text-pretty tracking-tighter  ">Chatbots are
                                AI-powered
                                software that can
                                interact with
                                users
                                in a
                                conversational
                                manner.
                                They can provide customer support, answer common questions, and guide users through the
                                website. Chatbot services offer advanced functionalities for creating interactive chatbots
                            </p>
                            <button class="bg-[#0f79b9] shadow-2xl my-4 w-fit  px-4 rounded-lg text-white   py-2">Read
                                more</button>
                        </div>
    
                    </div>
    
                    <!-- card flip -2 -->
                    <div
                        class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]   flex md:flex-row  flex-col-reverse    justify-between ">
    
                        <div class="space-y-4 pt-4 p-6 mb-4">
                            <h2 class="text-2xl font-semibold">Adaptation of Machine Learning</h2>
                            <p class="text-sm md:text-base leading-relaxed text-pretty tracking-tighter ">
                                Given our focus on the machine learning in our software and commitment to delivering
                                exceptional products to our customers, machine learning platforms play a vital role in our
                                work. These platforms provide the essential tools and infrastructure to efficiently develop
                                and deploy machine learning models, while AI software offers robust frameworks, libraries,
                                and tools to streamline the entire AI model development and deployment process, aligning
                                perfectly with our company culture.
                            </p>
                            <button class="bg-[#0f79b9] my-4 w-fit  px-4 rounded-lg shadow-2xl text-white   py-2">Read
                                more</button>
                        </div>
                        <div class="md:w-1/2">
                            <img class=" w-full h-full  rounded-r-lg object-cover"
                                src="/asset/services/14_Machine_Learning_platfrom.jpg" alt="">
                        </div>
                    </div>
    
    
                    <!-- card 3 -->
                    <div
                        class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]  flex md:flex-row flex-col     justify-between ">
                        <div class="md:w-1/2">
                            <img class=" rounded-l-lg w-full h-full object-cover"
                                src="/asset/services/16.software_development.jpg" alt="">
                        </div>
                        <div class="space-y-4 pt-4 p-6 ">
                            <h2 class="text-2xl font-semibold">Software Development</h2>
                            <p class="text-sm md:text-base leading-relaxed text-pretty tracking-tighter  ">
                                At our company, we believe in harnessing the power of modern technology to craft exceptional
                                websites. Our team of brilliant minds collaborates closely, leveraging their expertise in
                                software development to design and build user-centric, impactful experiences that empower
                                our clients and their audiences
                            </p>
                            <button class="bg-[#0f79b9] shadow-2xl my-4 w-fit  px-4 rounded-lg text-white   py-2">Read
                                more</button>
                        </div>
                    </div>
    
    
                    <!-- card flip -4 -->
                    <div
                        class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]   flex md:flex-row flex-col-reverse    justify-between ">
    
                        <div class="space-y-4 pt-4 p-6">
                            <h2 class="text-2xl font-semibold">Fraud Detection and Cyber Security</h2>
                            <p class="text-sm md:text-base leading-relaxed text-pretty tracking-tighter  ">
                                Our unwavering commitment is safeguarding your data. We employ cutting-edge fraud detection
                                systems to shield your software and information from cyber attacks. In the rare event of a
                                breach, our data recovery expertise ensures a swift comeback. Additionally, our digital
                                forensics team meticulously investigates incidents, while robust security protocols offer
                                unwavering resistance against digital warfare.
                            </p>
                            <button class="bg-[#0f79b9] shadow-2xl my-4 w-fit  px-4 rounded-lg  text-white py-2">Read
                                more</button>
                        </div>
                        <div class="md:w-1/2">
                            <img class=" w-full h-full rounded-r-lg object-cover"
                                src="/asset/services/11.Predictive_Analysis.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
    
    
            <!-- Insider section -->
            <section class="  md:mt-16 shadow-lg     ">
                <section class="flex  gap-4 py-4 w-full bg-gray-100 shadow-lg  mt-10    ">
                    <div class="md:w-1/2 hidden md:block">
                        <img class="  w-96   " src="/asset/background/Lovepik_com-400671134-geometric-lines (2).png"
                            alt="">
                    </div>
                    <div class="md:w-1/2 w-full text-center flex flex-col justify-center items-center space-y-4 p-4  ">
                        <h2 class="text-3xl md:text-4xl font-semibold">Become an <span class="text-[#0f79b9]">insider</span>
                        </h2>
                        <p class="md:text-lg font-normal text-wrap "> Elevate your career with us as we shape the future of
                            technology
                            together.</p>
                        <button
                            class="text-white bg-[#0f79b9] hover:bg-gray-300 hover:text-black md:text-xl font-semibold md:px-3 py-2 px-6 md:py-2 rounded-lg shadow-xl ">Join
                            Us</button>
                    </div>
                </section>
            </section>
    
            <!-- quote Section -->
            <section class="  mt-10 md:mb-10 mb-8     ">
                <div class=" w-full  flex justify-center   ">
                    <div
                        class="flex flex-col items-center max-w-5xl w-fit p-2 md:p-4 m-2 md:mb-8 md:mx-auto  lg:mx-0 md:border-4 md:border-[#0F79B9]">
                        <div class="relative text-center p-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="absolute top-0 left-0 w-8 h-8 dark:text-gray-700">
                                <path fill="currentColor" d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z">
                                </path>
                                <path fill="currentColor"
                                    d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                            </svg>
                            <p class="px-6 py-1 md:text-2xl text-pretty leading-relaxed tracking-wider     "> Building on
                                seven years of
                                successful
                                software
                                development,
                                ATC confidently approaches future needs. Our highly skilled engineers, trained in
                                international quality standards, ensure flawless execution and uncompromising data security.
                                We empower organizations through technology and strive for global leadership, fueled by
                                stakeholder support and a commitment to innovation. </p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="absolute bottom-0 right-0 w-8 h-8 dark:text-gray-700">
                                <path fill="currentColor" d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z">
                                </path>
                                <path fill="currentColor"
                                    d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                            </svg>
                        </div>
                        <span class="w-12 h-1 my-2 rounded-lg dark:bg-[#0f79b9]"></span>
                        <p><span class="font-bold text-lg">MD & CEO at ATC Tech Limited</span>
                        </p>
                    </div>
                </div>
                <button
                    class="bg-[#0f79b9] hover:bg-teal-700 text-white p-4  md:p-6  rounded-2xl shadow-2xl font-bold relative -right-5 md:-right-16 w-fit mt-4 ">
                    <span> <img class=" w-6 md:w-10 mx-auto text-white " src="./asset/icon/chat.svg" alt=""></span> Let's
                    Chat
                </button>
            </section>
    
            <!-- Project Section -->
            <section class="bg-blue-950">
                <!-- bg-[#1e1e1e] -->
                <section
                    class="py-8 text-white  flex flex-col md:flex-row justify-around items-center gap-4 md:max-w-7xl  md:mx-auto ">
                    <div
                        class="md:w-1/4 w-fit space-y-10 md:p-4  text-center md:text-left flex flex-col  justify-between  ">
                        <h2 class=" text-3xl md:text-5xl font-semibold">Let's talk about <br> your project</h2>
                        <button
                            class="text-white bg-[#0f79b9]  md:text-xl font-semibold md:px-3 md:py-2 mx-auto md:mx-0  py-2 px-6 w-fit  rounded-lg shadow-xl  ">Schedule
                            a
                            call</button>
                    </div>
                    <!-- input filed -->
                    <div class="md:w-9/12 w-full flex flex-col gap-10   p-14  ">
                        <div class="flex flex-row justify-around gap-14">
                            <input class=" w-1/2 p-2 text-lg font-semibold  border-b-2 bg-blue-950 border-white" type="text"
                                placeholder="Name*">
                            <input class=" w-1/2 p-2 text-lg font-semibold  border-b-2 bg-blue-950 border-white"
                                type="email" placeholder="Email*">
                        </div>
                        <div class="flex flex-row justify-around gap-14">
                            <input class="w-1/2 p-2 text-lg font-semibold  border-b-2 bg-blue-950 border-white"
                                type="number" placeholder="Phone*">
                            <input class=" w-1/2 p-2 text-lg font-semibold  border-b-2 bg-blue-950 border-white"
                                type="email" placeholder="Project details">
                        </div>
                        <!-- <input class="p-2 w-fit mx-auto" type="file"> -->
                        <button class="bg-[#808080] p-2 rounded-lg text-lg hover:bg-[#0F79B9]">Send Message</button>
                    </div>
                </section>
            </section>
        </main>
        <footer>
            <footer class="py-6 bg-[#3a3a3a] text-white">
                <div class="container px-6 mx-auto space-y-6 divide-y dark:divide-gray-400 md:space-y-12 divide-opacity-50">
                    <div class="grid grid-cols-12 gap-4">
    
                        <div class="col-span-12 text-center md:text-left md:col-span-3">
                            <p class="pb-1 text-lg font-medium">Dubai Office</p>
                            <ul>
                                <li>
                                    <p class="hover:text-blue-700">Central
                                        Building, Shop No. G-11, <br> Naif,
                                        Deira, Dubai, UAE.
                                    </p>
                                </li>
                                <li>
                                    <p class="hover:text-blue-700"> Email:
                                        atctechlimited@gmail.com</p>
                                </li>
    
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 text-center md:text-left md:col-span-3">
                            <p class="pb-1 text-lg font-medium">Bangladesh</p>
                            <ul>
                                <li>
                                    <p class="hover:text-blue-700">Email: atctechlimited@gamil.com</p>
                                </li>
    
                            </ul>
                        </div>
                        <div
                            class="pb-6 col-span-full md:pb-0 md:col-span-6  flex flex-col md:flex-row justify-around items-center">
                            <img class="w-48" src="/asset/icon/ATC-Logo-white.png" alt="">
                            <img class="w-48" src="/asset/icon/5dff5369c15edNews_6-removebg-preview.png" alt="">
                        </div>
                    </div>
                    <div class="grid justify-center pt-6 lg:justify-between">
                        <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                            <span>©2024 All rights reserved | ATC Tech Limited </span>
    
                        </div>
                        <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                            <a rel="noopener noreferrer" href="#" title="Email"
                                class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-[#0F79B9] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </a>
                            <a rel="noopener noreferrer" href="#" title="Twitter"
                                class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-[#0F79B9] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z">
                                    </path>
                                </svg>
                            </a>
                            <a rel="noopener noreferrer" href="#" title="GitHub"
                                class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-[#0F79B9] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-5 h-5">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const slider = document.querySelector('#slider');
                setTimeout(function moveSlide() {
                    const max = slider.scrollWidth - slider.clientWidth;
                    const left = slider.clientWidth;
        
                    if (max === slider.scrollLeft) {
                        slider.scrollTo({ left: 0, behavior: 'smooth' })
                    } else {
                        slider.scrollBy({ left, behavior: 'smooth' })
                    }
        
                    setTimeout(moveSlide, 2000)
                }, 2000)
        
            })
        </script>
    </body>


</html>
