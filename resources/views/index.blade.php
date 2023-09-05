@extends('layouts.master')
@section('content')
    <section class="hero">
        <svg
            class="top-left"
            width="192"
            height="192"
            viewBox="0 0 192 192"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M192 0C166.6 15.4 141.3 30.9 135.8 56.3C130.3 81.6 144.8 116.9 135.8 135.8C126.7 154.6 94.3 156.9 67.7 163.5C41.2 170.1 20.6 181.1 0 192V0H192Z"
                fill="#D9DCE9"
            />
            <path
                d="M144 0C125 11.6 106 23.2 101.9 42.2C97.8 61.2 108.6 87.7 101.8 101.8C95.1 115.9 70.7 117.7 50.8 122.6C30.9 127.6 15.4 135.8 0 144V0H144Z"
                fill="#8F99BF"
            />
            <path
                d="M96 0C83.3 7.7 70.6 15.4 67.9 28.1C65.2 40.8 72.4 58.5 67.9 67.9C63.4 77.3 47.1 78.5 33.9 81.8C20.6 85.1 10.3 90.5 0 96V0H96Z"
                fill="#415C95"
            />
            <path
                d="M48 0C41.7 3.9 35.3 7.7 34 14.1C32.6 20.4 36.2 29.2 33.9 33.9C31.7 38.6 23.6 39.2 16.9 40.9C10.3 42.5 5.1 45.3 0 48V0H48Z"
                fill="#004080"
            />
        </svg>
        <div class="svg-container">
            <svg
                width="320"
                height="227"
                viewBox="0 0 320 227"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0 3.07449L7.7 1.57449C15.3 0.0744861 30.7 -2.92551 45.8 7.57449C61 18.0745 76 42.0745 91.2 46.3745C106.3 50.7745 121.7 35.3745 137 24.0745C152.3 12.7745 167.7 5.37447 183 3.87447C198.3 2.37447 213.7 6.77449 228.8 9.57449C244 12.3745 259 13.7745 274.2 19.2745C289.3 24.7745 304.7 34.3745 312.3 39.2745L320 44.0745V226.074H312.3C304.7 226.074 289.3 226.074 274.2 226.074C259 226.074 244 226.074 228.8 226.074C213.7 226.074 198.3 226.074 183 226.074C167.7 226.074 152.3 226.074 137 226.074C121.7 226.074 106.3 226.074 91.2 226.074C76 226.074 61 226.074 45.8 226.074C30.7 226.074 15.3 226.074 7.7 226.074H0V3.07449Z"
                    fill="#D9DCE9"
                />
                <path
                    d="M0 96.0744L7.7 89.5744C15.3 83.0744 30.7 70.0744 45.8 61.3744C61 52.7744 76 48.3744 91.2 52.0744C106.3 55.7744 121.7 67.3744 137 67.5744C152.3 67.7744 167.7 56.3744 183 49.0744C198.3 41.7744 213.7 38.3744 228.8 47.0744C244 55.7744 259 76.3744 274.2 84.3744C289.3 92.3744 304.7 87.7744 312.3 85.3744L320 83.0744V226.074H312.3C304.7 226.074 289.3 226.074 274.2 226.074C259 226.074 244 226.074 228.8 226.074C213.7 226.074 198.3 226.074 183 226.074C167.7 226.074 152.3 226.074 137 226.074C121.7 226.074 106.3 226.074 91.2 226.074C76 226.074 61 226.074 45.8 226.074C30.7 226.074 15.3 226.074 7.7 226.074H0V96.0744Z"
                    fill="#AAB2CE"
                />
                <path
                    d="M0 77.0745L7.7 84.3745C15.3 91.7745 30.7 106.374 45.8 112.774C61 119.074 76 117.074 91.2 112.274C106.3 107.374 121.7 99.7745 137 103.574C152.3 107.374 167.7 122.774 183 128.274C198.3 133.774 213.7 129.374 228.8 126.274C244 123.074 259 121.074 274.2 114.874C289.3 108.774 304.7 98.3745 312.3 93.2745L320 88.0745V226.074H312.3C304.7 226.074 289.3 226.074 274.2 226.074C259 226.074 244 226.074 228.8 226.074C213.7 226.074 198.3 226.074 183 226.074C167.7 226.074 152.3 226.074 137 226.074C121.7 226.074 106.3 226.074 91.2 226.074C76 226.074 61 226.074 45.8 226.074C30.7 226.074 15.3 226.074 7.7 226.074H0V77.0745Z"
                    fill="#7C89B4"
                />
                <path
                    d="M0 147.074L7.7 145.874C15.3 144.774 30.7 142.374 45.8 144.074C61 145.774 76 151.374 91.2 149.074C106.3 146.774 121.7 136.374 137 131.874C152.3 127.374 167.7 128.774 183 130.574C198.3 132.374 213.7 134.774 228.8 138.374C244 142.074 259 147.074 274.2 144.374C289.3 141.774 304.7 131.374 312.3 126.274L320 121.074V226.074H312.3C304.7 226.074 289.3 226.074 274.2 226.074C259 226.074 244 226.074 228.8 226.074C213.7 226.074 198.3 226.074 183 226.074C167.7 226.074 152.3 226.074 137 226.074C121.7 226.074 106.3 226.074 91.2 226.074C76 226.074 61 226.074 45.8 226.074C30.7 226.074 15.3 226.074 7.7 226.074H0V147.074Z"
                    fill="#4C639A"
                />
                <path
                    d="M0 175.074L7.7 176.074C15.3 177.074 30.7 179.074 45.8 178.774C61 178.374 76 175.774 91.2 175.774C106.3 175.774 121.7 178.374 137 178.374C152.3 178.374 167.7 175.774 183 173.274C198.3 170.774 213.7 168.374 228.8 168.574C244 168.774 259 171.374 274.2 177.074C289.3 182.774 304.7 191.374 312.3 195.774L320 200.074V226.074H312.3C304.7 226.074 289.3 226.074 274.2 226.074C259 226.074 244 226.074 228.8 226.074C213.7 226.074 198.3 226.074 183 226.074C167.7 226.074 152.3 226.074 137 226.074C121.7 226.074 106.3 226.074 91.2 226.074C76 226.074 61 226.074 45.8 226.074C30.7 226.074 15.3 226.074 7.7 226.074H0V175.074Z"
                    fill="#004080"
                />
            </svg>
            <svg
                width="475"
                height="165"
                viewBox="0 0 475 165"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0 2.23436L11.4297 1.14425C22.7109 0.0541324 45.5703 -2.1261 67.9844 5.50471C90.5469 13.1355 112.812 30.5774 135.375 33.7024C157.789 36.9001 180.648 25.7082 203.359 17.496C226.07 9.28378 248.93 3.90587 271.641 2.81575C294.352 1.72564 317.211 4.92332 339.625 6.9582C362.188 8.99309 384.453 10.0105 407.016 14.0076C429.43 18.0047 452.289 24.9815 463.57 28.5425L475 32.0309V164.298H463.57C452.289 164.298 429.43 164.298 407.016 164.298C384.453 164.298 362.188 164.298 339.625 164.298C317.211 164.298 294.352 164.298 271.641 164.298C248.93 164.298 226.07 164.298 203.359 164.298C180.648 164.298 157.789 164.298 135.375 164.298C112.812 164.298 90.5469 164.298 67.9844 164.298C45.5703 164.298 22.7109 164.298 11.4297 164.298H0V2.23436Z"
                    fill="#D9DCE9"
                />
                <path
                    d="M0 69.8215L11.4297 65.0977C22.7109 60.3739 45.5703 50.9262 67.9844 44.6035C90.5469 38.3535 112.812 35.1558 135.375 37.8448C157.789 40.5337 180.648 48.964 203.359 49.1093C226.07 49.2547 248.93 40.9698 271.641 35.6646C294.352 30.3593 317.211 27.8884 339.625 34.2111C362.188 40.5337 384.453 55.5047 407.016 61.3186C429.43 67.1326 452.289 63.7895 463.57 62.0454L475 60.3739V164.298H463.57C452.289 164.298 429.43 164.298 407.016 164.298C384.453 164.298 362.188 164.298 339.625 164.298C317.211 164.298 294.352 164.298 271.641 164.298C248.93 164.298 226.07 164.298 203.359 164.298C180.648 164.298 157.789 164.298 135.375 164.298C112.812 164.298 90.5469 164.298 67.9844 164.298C45.5703 164.298 22.7109 164.298 11.4297 164.298H0V69.8215Z"
                    fill="#AAB2CE"
                />
                <path
                    d="M0 56.0134L11.4297 61.3186C22.7109 66.6965 45.5703 77.307 67.9844 81.9582C90.5469 86.5367 112.812 85.0832 135.375 81.5948C157.789 78.0338 180.648 72.5105 203.359 75.2721C226.07 78.0338 248.93 89.2256 271.641 93.2227C294.352 97.2198 317.211 94.0221 339.625 91.7692C362.188 89.4437 384.453 87.9901 407.016 83.4843C429.43 79.0512 452.289 71.4931 463.57 67.7867L475 64.0076V164.298H463.57C452.289 164.298 429.43 164.298 407.016 164.298C384.453 164.298 362.188 164.298 339.625 164.298C317.211 164.298 294.352 164.298 271.641 164.298C248.93 164.298 226.07 164.298 203.359 164.298C180.648 164.298 157.789 164.298 135.375 164.298C112.812 164.298 90.5469 164.298 67.9844 164.298C45.5703 164.298 22.7109 164.298 11.4297 164.298H0V56.0134Z"
                    fill="#7C89B4"
                />
                <path
                    d="M0 106.886L11.4297 106.013C22.7109 105.214 45.5703 103.47 67.9844 104.705C90.5469 105.941 112.812 110.011 135.375 108.339C157.789 106.667 180.648 99.1094 203.359 95.839C226.07 92.5687 248.93 93.5861 271.641 94.8942C294.352 96.2024 317.211 97.9466 339.625 100.563C362.188 103.252 384.453 106.886 407.016 104.923C429.43 103.034 452.289 95.4756 463.57 91.7693L475 87.9902V164.298H463.57C452.289 164.298 429.43 164.298 407.016 164.298C384.453 164.298 362.188 164.298 339.625 164.298C317.211 164.298 294.352 164.298 271.641 164.298C248.93 164.298 226.07 164.298 203.359 164.298C180.648 164.298 157.789 164.298 135.375 164.298C112.812 164.298 90.5469 164.298 67.9844 164.298C45.5703 164.298 22.7109 164.298 11.4297 164.298H0V106.886Z"
                    fill="#4C639A"
                />
                <path
                    d="M0 127.234L11.4297 127.961C22.7109 128.688 45.5703 130.141 67.9844 129.923C90.5469 129.633 112.812 127.743 135.375 127.743C157.789 127.743 180.648 129.633 203.359 129.633C226.07 129.633 248.93 127.743 271.641 125.926C294.352 124.109 317.211 122.365 339.625 122.51C362.188 122.656 384.453 124.545 407.016 128.688C429.43 132.83 452.289 139.08 463.57 142.278L475 145.403V164.298H463.57C452.289 164.298 429.43 164.298 407.016 164.298C384.453 164.298 362.188 164.298 339.625 164.298C317.211 164.298 294.352 164.298 271.641 164.298C248.93 164.298 226.07 164.298 203.359 164.298C180.648 164.298 157.789 164.298 135.375 164.298C112.812 164.298 90.5469 164.298 67.9844 164.298C45.5703 164.298 22.7109 164.298 11.4297 164.298H0V127.234Z"
                    fill="#004080"
                />
            </svg>
        </div>
        <!-- Svgs -->
        @include('layouts.navigation')
        <div class="center">
            <img src="images/personal.jpg" width="72px" height="72px" alt=""/>
            <h2>دکتر آرش رهسپار</h2>
            <p>پزشک، حقوق‌دان، نویسنده و مترجم</p>
        </div>
    </section>
    <section class="books-section container">
        <!-- Svgs -->
        <div class="svg-container-2">
            <svg
                width="320"
                height="118"
                viewBox="0 0 320 118"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M320 116.395L312.3 117.178C304.7 117.961 289.3 119.527 274.2 114.046C259 108.566 244 96.0391 228.8 93.7948C213.7 91.4982 198.3 99.5362 183 105.434C167.7 111.332 152.3 115.195 137 115.978C121.7 116.761 106.3 114.464 91.2 113.003C76 111.541 61 110.81 45.8 107.94C30.7 105.069 15.3 100.058 7.70001 97.5006L0 94.9952V-3.05176e-05H7.70001C15.3 -3.05176e-05 30.7 -3.05176e-05 45.8 -3.05176e-05C61 -3.05176e-05 76 -3.05176e-05 91.2 -3.05176e-05C106.3 -3.05176e-05 121.7 -3.05176e-05 137 -3.05176e-05C152.3 -3.05176e-05 167.7 -3.05176e-05 183 -3.05176e-05C198.3 -3.05176e-05 213.7 -3.05176e-05 228.8 -3.05176e-05C244 -3.05176e-05 259 -3.05176e-05 274.2 -3.05176e-05C289.3 -3.05176e-05 304.7 -3.05176e-05 312.3 -3.05176e-05H320V116.395Z"
                    fill="#D9DCE9"
                />
                <path
                    d="M320 67.8537L312.3 71.2464C304.7 74.6391 289.3 81.4245 274.2 85.9655C259 90.4543 244 92.7509 228.8 90.8196C213.7 88.8884 198.3 82.8338 183 82.7294C167.7 82.625 152.3 88.5752 137 92.3855C121.7 96.1957 106.3 97.9704 91.2 93.4294C76 88.8884 61 78.1362 45.8 73.9606C30.7 69.785 15.3 72.186 7.70001 73.4386L0 74.6391V-7.62939e-06H7.70001C15.3 -7.62939e-06 30.7 -7.62939e-06 45.8 -7.62939e-06C61 -7.62939e-06 76 -7.62939e-06 91.2 -7.62939e-06C106.3 -7.62939e-06 121.7 -7.62939e-06 137 -7.62939e-06C152.3 -7.62939e-06 167.7 -7.62939e-06 183 -7.62939e-06C198.3 -7.62939e-06 213.7 -7.62939e-06 228.8 -7.62939e-06C244 -7.62939e-06 259 -7.62939e-06 274.2 -7.62939e-06C289.3 -7.62939e-06 304.7 -7.62939e-06 312.3 -7.62939e-06H320V67.8537Z"
                    fill="#AAB2CE"
                />
                <path
                    d="M320 77.7708L312.3 73.9606C304.7 70.0981 289.3 62.4776 274.2 59.1371C259 55.8488 244 56.8927 228.8 59.3981C213.7 61.9557 198.3 65.9225 183 63.9391C167.7 61.9557 152.3 53.9176 137 51.0469C121.7 48.1761 106.3 50.4727 91.2 52.0908C76 53.761 61 54.8049 45.8 58.041C30.7 61.2249 15.3 66.6532 7.70001 69.3152L0 72.0293V-3.05176e-05H7.70001C15.3 -3.05176e-05 30.7 -3.05176e-05 45.8 -3.05176e-05C61 -3.05176e-05 76 -3.05176e-05 91.2 -3.05176e-05C106.3 -3.05176e-05 121.7 -3.05176e-05 137 -3.05176e-05C152.3 -3.05176e-05 167.7 -3.05176e-05 183 -3.05176e-05C198.3 -3.05176e-05 213.7 -3.05176e-05 228.8 -3.05176e-05C244 -3.05176e-05 259 -3.05176e-05 274.2 -3.05176e-05C289.3 -3.05176e-05 304.7 -3.05176e-05 312.3 -3.05176e-05H320V77.7708Z"
                    fill="#7C89B4"
                />
                <path
                    d="M320 41.2342L312.3 41.8605C304.7 42.4347 289.3 43.6874 274.2 42.8C259 41.9127 244 38.9898 228.8 40.1903C213.7 41.3908 198.3 46.8191 183 49.1679C167.7 51.5166 152.3 50.7859 137 49.8464C121.7 48.9069 106.3 47.6542 91.2 45.7752C76 43.8439 61 41.2342 45.8 42.6435C30.7 44.0005 15.3 49.4288 7.70001 52.0908L0 54.8049V-2.67029e-05L7.70001 -2.67029e-05C15.3 -2.67029e-05 30.7 -2.67029e-05 45.8 -2.67029e-05C61 -2.67029e-05 76 -2.67029e-05 91.2 -2.67029e-05C106.3 -2.67029e-05 121.7 -2.67029e-05 137 -2.67029e-05C152.3 -2.67029e-05 167.7 -2.67029e-05 183 -2.67029e-05C198.3 -2.67029e-05 213.7 -2.67029e-05 228.8 -2.67029e-05C244 -2.67029e-05 259 -2.67029e-05 274.2 -2.67029e-05C289.3 -2.67029e-05 304.7 -2.67029e-05 312.3 -2.67029e-05H320V41.2342Z"
                    fill="#4C639A"
                />
                <path
                    d="M320 26.6195L312.3 26.0976C304.7 25.5756 289.3 24.5317 274.2 24.6883C259 24.8971 244 26.2542 228.8 26.2542C213.7 26.2542 198.3 24.8971 183 24.8971C167.7 24.8971 152.3 26.2542 137 27.559C121.7 28.8639 106.3 30.1166 91.2 30.0122C76 29.9078 61 28.5507 45.8 25.5756C30.7 22.6005 15.3 18.1117 7.70001 15.8151L0 13.5707V-2.67029e-05H7.70001C15.3 -2.67029e-05 30.7 -2.67029e-05 45.8 -2.67029e-05C61 -2.67029e-05 76 -2.67029e-05 91.2 -2.67029e-05C106.3 -2.67029e-05 121.7 -2.67029e-05 137 -2.67029e-05C152.3 -2.67029e-05 167.7 -2.67029e-05 183 -2.67029e-05C198.3 -2.67029e-05 213.7 -2.67029e-05 228.8 -2.67029e-05C244 -2.67029e-05 259 -2.67029e-05 274.2 -2.67029e-05C289.3 -2.67029e-05 304.7 -2.67029e-05 312.3 -2.67029e-05H320V26.6195Z"
                    fill="#004080"
                />
            </svg>
            <svg
                width="475"
                height="86"
                viewBox="0 0 475 86"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M475 84.8338L463.57 85.4028C452.289 85.9717 429.43 87.1097 407.016 83.1268C384.453 79.1439 362.188 70.0401 339.625 68.409C317.211 66.7399 294.352 72.5816 271.641 76.8679C248.93 81.1543 226.07 83.9613 203.359 84.5303C180.648 85.0993 157.789 83.4303 135.375 82.3682C112.812 81.306 90.5469 80.775 67.9844 78.6887C45.5703 76.6024 22.711 72.9609 11.4297 71.1022L0 69.2814V0.244164H11.4297C22.711 0.244164 45.5703 0.244164 67.9844 0.244164C90.5469 0.244164 112.812 0.244164 135.375 0.244164C157.789 0.244164 180.648 0.244164 203.359 0.244164C226.07 0.244164 248.93 0.244164 271.641 0.244164C294.352 0.244164 317.211 0.244164 339.625 0.244164C362.188 0.244164 384.453 0.244164 407.016 0.244164C429.43 0.244164 452.289 0.244164 463.57 0.244164H475V84.8338Z"
                    fill="#D9DCE9"
                />
                <path
                    d="M475 49.5565L463.57 52.0221C452.289 54.4877 429.43 59.419 407.016 62.7191C384.453 65.9813 362.188 67.6503 339.625 66.2468C317.211 64.8433 294.352 60.4432 271.641 60.3673C248.93 60.2914 226.07 64.6157 203.359 67.3848C180.648 70.1539 157.789 71.4436 135.375 68.1435C112.812 64.8433 90.5469 57.0292 67.9844 53.9946C45.5703 50.96 22.711 52.7049 11.4297 53.6153L0 54.4877V0.244184H11.4297C22.711 0.244184 45.5703 0.244184 67.9844 0.244184C90.5469 0.244184 112.812 0.244184 135.375 0.244184C157.789 0.244184 180.648 0.244184 203.359 0.244184C226.07 0.244184 248.93 0.244184 271.641 0.244184C294.352 0.244184 317.211 0.244184 339.625 0.244184C362.188 0.244184 384.453 0.244184 407.016 0.244184C429.43 0.244184 452.289 0.244184 463.57 0.244184H475V49.5565Z"
                    fill="#AAB2CE"
                />
                <path
                    d="M475 56.7637L463.57 53.9946C452.289 51.1876 429.43 45.6495 407.016 43.2218C384.453 40.832 362.188 41.5907 339.625 43.4114C317.211 45.2701 294.352 48.153 271.641 46.7116C248.93 45.2701 226.07 39.4285 203.359 37.3422C180.648 35.2559 157.789 36.925 135.375 38.1009C112.812 39.3147 90.5469 40.0734 67.9844 42.4252C45.5703 44.7391 22.711 48.6841 11.4297 50.6186L0 52.5911V0.244193H11.4297C22.711 0.244193 45.5703 0.244193 67.9844 0.244193C90.5469 0.244193 112.812 0.244193 135.375 0.244193C157.789 0.244193 180.648 0.244193 203.359 0.244193C226.07 0.244193 248.93 0.244193 271.641 0.244193C294.352 0.244193 317.211 0.244193 339.625 0.244193C362.188 0.244193 384.453 0.244193 407.016 0.244193C429.43 0.244193 452.289 0.244193 463.57 0.244193H475V56.7637Z"
                    fill="#7C89B4"
                />
                <path
                    d="M475 30.2109L463.57 30.6661C452.289 31.0834 429.43 31.9937 407.016 31.3489C384.453 30.704 362.188 28.5798 339.625 29.4522C317.211 30.3247 294.352 34.2697 271.641 35.9767C248.93 37.6836 226.07 37.1526 203.359 36.4698C180.648 35.787 157.789 34.8766 135.375 33.511C112.812 32.1075 90.5469 30.2109 67.9844 31.2351C45.5703 32.2213 22.711 36.1663 11.4297 38.1009L0 40.0734V0.24418H11.4297C22.711 0.24418 45.5703 0.24418 67.9844 0.24418C90.5469 0.24418 112.812 0.24418 135.375 0.24418C157.789 0.24418 180.648 0.24418 203.359 0.24418C226.07 0.24418 248.93 0.24418 271.641 0.24418C294.352 0.24418 317.211 0.24418 339.625 0.24418C362.188 0.24418 384.453 0.24418 407.016 0.24418C429.43 0.24418 452.289 0.24418 463.57 0.24418H475V30.2109Z"
                    fill="#4C639A"
                />
                <path
                    d="M475 19.5898L463.57 19.2105C452.289 18.8311 429.43 18.0725 407.016 18.1863C384.453 18.338 362.188 19.3243 339.625 19.3243C317.211 19.3243 294.352 18.338 271.641 18.338C248.93 18.338 226.07 19.3243 203.359 20.2726C180.648 21.2209 157.789 22.1313 135.375 22.0554C112.812 21.9795 90.5469 20.9933 67.9844 18.8311C45.5703 16.669 22.711 13.4068 11.4297 11.7378L0 10.1067V0.244193H11.4297C22.711 0.244193 45.5703 0.244193 67.9844 0.244193C90.5469 0.244193 112.812 0.244193 135.375 0.244193C157.789 0.244193 180.648 0.244193 203.359 0.244193C226.07 0.244193 248.93 0.244193 271.641 0.244193C294.352 0.244193 317.211 0.244193 339.625 0.244193C362.188 0.244193 384.453 0.244193 407.016 0.244193C429.43 0.244193 452.289 0.244193 463.57 0.244193H475V19.5898Z"
                    fill="#004080"
                />
            </svg>
        </div>
    </section>
    <section class="books container">
      <span>
        <i class="fa-solid fa-books"></i>
        <h2>کتاب ها</h2>
      </span>
        <hr />
        <div class="cards">
            <article class="card">
                <div class="image">
                    <img src="images/kherad.jpg" alt="kherad" width="113px" />
                </div>
                <div class="content">
                    <div class="first-row">
                        <h2 class="title">خرد ذهن</h2>
                        <h2 class="label">ترجمه</h2>
                    </div>
                    <div class="second-row">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                            در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                            نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                            کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                            زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <a class="more" href="{{route('more')}}">
                        <h2>ادامه مطلب و خرید</h2>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </a>
                </div>
            </article>
            <article class="card">
                <div class="image">
                    <img src="images/kherad.jpg" alt="kherad" width="113px" />
                </div>
                <div class="content">
                    <div class="first-row">
                        <h2 class="title">خرد ذهن</h2>
                        <h2 class="label">ترجمه</h2>
                    </div>
                    <div class="second-row">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                            در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                            نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                            کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                            زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <a class="more" href="{{route('more')}}">
                        <h2>ادامه مطلب و خرید</h2>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </a>
                </div>
            </article>
            <article class="card">
                <div class="image">
                    <img src="images/kherad.jpg" alt="kherad" width="113px" />
                </div>
                <div class="content">
                    <div class="first-row">
                        <h2 class="title">خرد ذهن</h2>
                        <h2 class="label">ترجمه</h2>
                    </div>
                    <div class="second-row">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                            در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                            نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                            کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                            زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <a class="more" href="{{route('more')}}">
                        <h2>ادامه مطلب و خرید</h2>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </a>
                </div>
            </article>
            <article class="card">
                <div class="image">
                    <img src="images/kherad.jpg" alt="kherad" width="113px" />
                </div>
                <div class="content">
                    <div class="first-row">
                        <h2 class="title">خرد ذهن</h2>
                        <h2 class="label">ترجمه</h2>
                    </div>
                    <div class="second-row">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله
                            در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                            نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                            کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را
                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                            زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <a class="more" href="{{route('more')}}">
                        <h2>ادامه مطلب و خرید</h2>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </a>
                </div>
            </article>
        </div>
    </section>
@endsection
