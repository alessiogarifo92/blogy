@extends('layouts.app')

@section('content')

<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{asset('assets/images/hero_5.jpg')}}); margin-top:-25px">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-6">
                <div class="post-entry text-center">
                    <h1 class="mb-4">About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section sec-halfs py-0">
    <div class="container">
        <div class="half-content d-lg-flex align-items-stretch">
            <div class="img" style="background-image: url({{asset('assets/images/hero_1.jpg')}})" data-aos="fade-in" data-aos-delay="100">
                
            </div>
            <div class="text">
                <h2 class="heading text-primary mb-3">Resources for makers and creatives</h2>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-outline-primary py-2">Read more</a></p>
            </div>
        </div>

        <div class="half-content d-lg-flex align-items-stretch">
            <div class="img order-md-2" style="background-image: url({{asset('assets/images/hero_2.jpg')}})" data-aos="fade-in">
                
            </div>
            <div class="text">
                <h2 class="heading text-primary mb-3">We are trusted by more than 5,000 clients</h2>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-outline-primary py-2">Read more</a></p>
            </div>
        </div>
    </div>

</div>

<div class="section sec-features">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="feature d-flex">
                    <span class="bi-bag-check-fill"></span>
                    <div>
                        <h3>Building your blog</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature d-flex">
                    <span class="bi-wallet-fill"></span>
                    <div>
                        <h3>Resources and insights</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature d-flex">
                    <span class="bi-pie-chart-fill"></span>
                    <div>
                        <h3>Blog just for you</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        
        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                <h2 class="heading text-primary">Our Team</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                <img src="{{asset('assets/images/person_1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">James Griffin</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <img src="data:image/jpeg;base64,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" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">Claire Smith</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIUAyAMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAQIDBwQFBgj/xAA3EAABAwIEBAQEBQMFAQAAAAABAAIDBBEFEiExBhNBUQciYXEUMoGRI0JSocGx0fAWJDOy8RX/xAAZAQEAAwEBAAAAAAAAAAAAAAAAAQIDBAX/xAAhEQEBAAMAAgMAAwEAAAAAAAAAAQIDESExIjJBEhNRBP/aAAwDAQACEQMRAD8A7qMKZoTGBTNCBwCkCaE5AoTgmhKgeCsPFsVo8Ion1dfMI4WDUnc+gUeLYpS4RQyVlbLkiYN7ak9h3KoviniCu4nrjJNeKnb/AMUN/lHr6omRseKPEbFMYldDhrn0NFfTKbPf7kbewXNMgkn1dKSdySTqsUxiM66+ifC+TPa+XooWbGla+lnZJz3RyN1a69vsRqrIwbxIEXLixaB/LAA+Iiu4H1I3C4OkAltFaNzniwLgNFhxTGhfLS1UWV7DYp1Nj0ZRVlPX0zKmjmZLC8Xa9huFPZUjwZxI7Aa9t5P9lKbSNOuUfq+iuyKVk0TZInBzHC7SDe4U9UsOSgpEIgqEl0IFQUBCBLJCE5IUEZSEJ5CaUEbghOISIMNoUoUbdlK3ZA4JSU1CBwKZNMyGN0shsxoufZKuI8Q8ddTwOoKYalmeV+1m3tYep2+6UjiONeIJccxLlh/+3i+Rg29/daOGAO0HTQe6xuY7zPdYuceg0WwpxoGg/K25Khogp6Ln4hHCzVzjYHsO67Wg4Gp5h+K9wJ1zBRcIUcUlTzXMF75h6KxaOMB40C5dmy95HXr1Yydrlqfw/iZ/xVMp9wFuKrgyjqaUQ1bM7sts53+66uHKALBTPyndR2/6Xk/HnniXAqjhut5bsxp36xuVl+FGM/F4QaKZ93wHyX/SVN4j4SzEeHqktb+LCwyMd7dFWfAOMOwrGKcvdaJxyPv2/wDVvrz7HPtw5ex6CQkBDgHA6HZKtWAQiyLIFCEBCAQUIQImFPITSgYUJSEIMFuylbsoWKUIHISoQMkdlYSeyovjPFXVuJVdiMj5On6W6BXLxDUto8Hqp3kAMjJXniqkM8znPI1Juq32vj6FOC+cX+ULPhk1nPUtsFi0x81yNNynRvyVBa7UF4BS+ItPbu+F6x9KIxFSumkLLfMGtHuSuk/1BilMOZNg0c0QO9LUhzvsVqcOwAYphAhbNJG91yC11ifROwrgd1FO95nqtvIwsIDT30/zVck5XbZZx2eB49TYtDzIWyRubo6KVuVwKz6vEaSiZnrKiOBl7ZnutqtRQUzqXEo2SvD8zBmcBa5Wr4uhxFszXUlDT1ZcbgSOHkHoDuVWXycjZ1uM4TiFFUxU+IU0rnRPAY2TU6FUFRO0Y4G1wNfdWbUVda6jq4cVwWKKJlM6XnRx5Qw22v3VYUzvwGvI6tut9c9ufb+PQfAeMjGMBic8jnw/hSj1Gx+oXSKj+AsdOCYs2SV5FDMQ2YdBfZ30P7FXf2sbjoe63jmvs5CDskUoKhIhAqEiEBdIUJCgQoQhBgNUoCiapW7IHISLCxWsbR0UkriW6bjog47xRxZrcL+Bid5nm77dlUUbczvS111nGssnxZjmPneLvH6Rf5VzDXWc+1hsFTrWTwyKaPM89Gt3Kw4nunq2lv55QR7XU0z8lHJGXFtwLu9+n7J/D0bZq+C+gBuoy+qcZ8lycMPYyNg7DZdLVYtBTx/iv6gGwva+11yOG0ZkcWMlLC6LM0j3sVBHPUzc6gmwuXPGDfI8HOP1DuuKdejZK6anbLJiTHG3lOY+y2zxTSO5NS1rjcloPX2XB4b8fQ1gfF8SyIg2ZLE4m23RbKuxOOpBZBLIa+mIkLXMIIv09iFPmRGWPWT4g8ij4TxERtAYYHA/UaKhobfBOI/KRf0/z+VZviljD/8A4EdE7yPnlbmv0DfMf3sFWcFvgpXO0Di0fX/AujT9euTd9uN7w5E2qo5uY7IWNdlPfS9lc3Acta/AYhWMc0NsIi7dzbf0VV+H+GurJo2vYeU2QPeDu4E2srxgGWNrdALbDZbYufJNdIkuhWUOQkCVAIQkKBU0pUiBChB2Qg17Cpm7LHjWQ3ZAq5ziSoibUtbUSBsMLOa8k6C237kLo1WvHjnVfETcOikytNOJZb/KMp0P2H3UZekxX/EWJivxSacXyuIa247LWNd5XOPQphJeAXX17pGtdqNd1Rojqpi5oboRubLJwKqMNRYG4tcrAk+VnZzbqagHwlcwy6N/N6Aq1x7ijHLmS3+HcTbIaY5rlrrb7tI1W9lZNzo6iG/Mb62vY9/oqzcyooiJ6Q+U65b6FdtwvxdTVDOTVnlyfpeFxc5XoTJ10HEVTHGGcuR7g21nQi9773BssKepiw6hnq6tzWPkcXve46f4FkjEMPyEgsJ6Bu6p/wAV8YrqnEm0R8lGyNsgjbpcm+/2V5LsvFMssdc7I0XFOOnH8XdVG4p2DJC07ht9z6ndYEZcWCMny3vZYjNRfos6BueJ9tx/K6ecnI4+9vauXgLDRS09E5oJFRE2R1u41t+6sECwsNlXHhniFfU4fT2bE6CM8p5LvMwdrb9lZA2U4+lMr5CEIVlTgi6alQLdBSJECkoSIQIUJCUIMCMKdosFDEQpriyAKpziXGqmatqq44YYg6E0sxMl8jr6e2xVxOI72Vf8YRxQUmJS5NSLEDo22l/qB+6rktiqeSOx8zwB6fwgvuw5Ra+gv0HcqF2eWQyWFjrZBiL3XcdBs3orY4WpuSOOHMbt+UG10rorON9fVZDPw3DQZXGxUj4wtpjxn1vuFMQZNlwysN76QPP/AFP8LrG8MNc4SRx5gq1jYWkFpIcDcEdCrk4CxhmL4fllt8REcsg79iPf+64/+jVz5R2aNvfjU+H4a6GENLAD3AXAeKNM1mOUryBlmgMb/cHT+quBzGgeVVn4r0MktPTVbG6xyEFY6b/HZK02/LCxV0lPLFePLcA7raMjpI56QUVRzM7mNfnFiDfU67BLbMGlwB01TXQMJvlFl6F199OD+XFs8NUbqDjUPw2Vjqaqgd8XDG7M1hGzidgSdLeqsMbbrzvg2P4vgjOXhtdJFHe/LIBb9iuvwvxTroZIxi1HBJFez5IAWuHrbYqv9diLktpCgpKqGsp46imkbJDI0OY9p0IKmVUlQEiLoHITLpboFuhJdNJQDkJpSoNXG9TiTRYMblOwoIsXxalwqjdVVjnCNv6RcnS+ipbibiSXHK2WRjHQUzyLRE3OnUrtvF2rdFgVLTt0bPUjNp0aCR+9vsqrDu60wn6ipMoPRKAo8xYLjUKRpDgCDcLRUPYHMI12TW1MeUNlIa4b3UwUcrSNWi/cKQMljebRuDvbot1wzjcmA4myraHOiPlmYPzt6/XqFp4i0tuCNU5RZ2cqZbL2PRlK6KoY2WF7ZI3tD2OGzgVpuLsLbW4ROzLsMwXP+EOMxVQfgVZK4SxgyUpPVv5m/Tcel+ys2TDIZGFkhe5rhYi9l591XHJ1zdjY8vwaMLT00SvaTbzm3YLc8YYc3CuJ66ljYGRB2aNo6NK1PRejj5jjy9mtaB0SkA3B6oumvKlCx/CbiF0bjgdU4Fri50Duzty367q0LrzZTSywyiSB5jkb5mPBsQ5egcDxKPFcKpq2NwIlYC70dsR97rLZP1aVswUiaClWSxUqbdF0CppKMyaSgCUKNxQg00ZWSwrAiesuNyDivGEE4Ph7+jaog/Vh/sqsab+oVqeMEgGAULOrqwH7Md/dVONdlrj6RUurNWajqOybzOX+I03adx2QHOabkC3cJbG+aMXPVvdWQyI5GutY6HZOctcXcnzx3yA6tO4K2DXB7Lq0vUUw+Ql7duoUrXXAI2URJGoTM/Kda3kd+xUDPoayow+tgrKOQx1EDw+N/Yj+F6U4cxmDH8FpcSphlbK3zMP5HjRzT7FeYyrD8HeIjRYvJg9Q8CnrfNHc/LMB/QgW+gVdmPYmUeNNHyeIaSqa2wmhyk+oK4AlW9430vMwWirAD+FPlcfRwKp4HTXdTqvxRl7OBTJN0X1SPKvUHB1gO6sHwsx+SKvOByAOhmD5onDdrha49juq6cdWn3W74LxBmH8T0NRL8hkyOPbMMv8AKrl5iYv0FOzKHMlzLnXSEpLqPMkLkDy5NLlGXphegkc5Cgc9CDQU7ythC46JUIOW8Vo2ScKF7m3dDURuYexJIP7EqoGlCFpgipRshCFoqjqheMvGhG/qE6ieeWhCifZP4nem6O8pFwd0IU1BKd7iC0m+U2upmyyQubLC8sljcHseN2uGoKEILw49nOLeGRrZ2hr5IYpyG7BxsVR7T5UIVdXoovqhyELQMd+VNhcSLg2JO/ZCFUXvwdjE2N8P01bUMayV12uynQkEi/7LeZikQsL7WBcU3MUqFAjc4phcUiESY5xQhCD/2Q==" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">Jessica Wilson</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                <img src="{{asset('assets/images/person_4.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">William Anderson</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <img src="data:image/jpeg;base64,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" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">Julie Harvey</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAG8ApwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBgcFBAj/xAA7EAABAwIEAwUGAwYHAAAAAAABAAIDBBEFEiExBkFhEyJRcYEHFDKRocFCsdEjJFLh8PEVFjRDYnKC/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAECAwQFBv/EACQRAQEAAgEEAgEFAAAAAAAAAAABAhEDBBIhMUFRBRMiQmFx/9oADAMBAAIRAxEAPwDVQiCYJwpgcIhshCIKUCGycJhsnCgJJJJEhJVd4s4tw7hmEe9vMlTIP2dPGe87qfAdfldPxpxNDw1hj6gt7Wod3YYhzcdr9P0WOUFHjfF2KTzAs7R7ryyuAsD4X308NlXLLS2ONrp4l7UeIKlx90FNRxE6dnFncPMu3+QU2B+1jEoZRHi0MVVGSLvYzI4D00+iEezHEWy3mroHtO/dN1XeI+GpcDmLH5HtcLh7QqTklul7xZa2+gaCtpsQpIqujlbLBK0OY9uxC9KyH2OY89k0+DTuvE4GaEfwnQOA6bH5rXG6rRkJJJJA6SZOFIdJMnQOkkkgAJwmThICCcIQiCAgnTBOgSCd/Zwvf/C0lGgmaJI3sOzmkfNBh3tUrzLxJHQB5/d4Q8kHeWTc+gAA6K98Lw0GAYLTQVFRTU8mQOd2sjWuJOvNUqWhixvjzHPeGtD4aqlc17gSQ1rg17R4X+yu+OYPiNUx5w2qZA19tOwa+55k33+y5uS7y06+LHWO3ckliliEkUsb2EfE1wIWdccyUtVTvyVET3tB0EgJ+StOJUT6Dhp0IkDZLta5zAG2udfoqXxBgOIMid7rT0xo2MzF3YgO21Oa6zk8tb60pXCtecMx+hq7kCOcZ9fwuu130JX0lC7uDVfLjW5ZHNGmq+j+GKz37AMPqj8UlOxzvOwv9brrjhrtA3SQAogVZU6cFMkgJJCiCBwkkEkAhOhBToCCIIAiBQGEiUN0kD3TOOiRK8mI1bKKinqZDZsTHPPoFBGJf5gZg/HWIVEsb5Yamolje1pAteTuu9LLVWYi/I2KPukbyO0DR4rAcWJnqJZSSXE3J6k/rdavwRjf+KYWw1LQJWHs3uOocQN/X9Vy8v3Hbw3+NdTiWWpmw99NRzUb2vIOZ0hzAfcrjY1jIhwB9PK9rpjEWOI56LpY1gLJQ+VjqaJhGp7PX5rMseroIXtooMuQOsA0Wubqmt5eHTydmOO44LW/vZFuZ+62/wBmc4k4Yp47k9mS3+SxUi1bfT4ufmtP9k1UTFXUJuMmWZhPW/6Lqnt5tnhpTToiBUbTcBPdaM0l0robpKAYKIFR3RhSCCSQTIACJADqiBQGnQpICCe6FeXFMQp8LopKuseWxR72FyTyAHMnwRMlvp6id+izL2rcVRRxf4JSShz3ke8Fp21+C/1P81PX41xDjdK+WF7MFoSDqO9OW+Jds30v5qgYZg0eLcQGCnL5oYiTLM78R8bqlu/Drw6Pk8Wz2r75e0Dupb9StP8AZtTtGEyB+oc87qjcSYW7CcWZBp2X4NLaclfeE3OpKMxiJx15a9VlnjcvEb8XTcnfZPcScYQTQ0n7Col7+gaCstlpCMTAcSS3md1sldlq2Wc2QAa/Cs2x+gNHVGYZhc8xZVwwyx9xPN0/L27scedv7ckfxXV99mdRG/G2NjIz+5vZIB0ku36PVCdKHvkH/L7LqcGcQs4fxmeski7Vr+64XsQ3p/XJaxxWfDfWmwCIFcTAeIcPx2IvoZDmAu6N7crh+o6hdYFae2NlntMCnuowUQKISAogVGEYQSBMmCSCMIgUF0QKkGCiUaIFASq3ExFZjVBRSC8TQ6Vw5E7D6ZvmrSqhjsrKepbXPdlbG0gka77WVa7ug45lybvw4/GNU+GlhpqZhlnmkyRwg/Gbael7E+S9HC+DQ8PYOWSuaZDeSeQ8zz1XPw6Cpq8fp67EGhglN4WXvkaNbefirFWMi7ImocBAy73A7OO/yT+3rXHz5ZdxPLLimPxS5MscpyR6btuAD91esFpnwxiGWxLQBvz0XJo6B+MY8MVkYW0VOCIAfxHl6K2QR9kcxcTd9z5KMZ5TjOy5X7R1DWtjeWjUA7FUjjWjLm3aPwk/kFfXG7ddspNvVVziYRx4dLPIMzWNLdd+n5K2XpOX7sLKyxjSHPcfMrxNfc36r2ST3hkkH4u79V44md3UbLOPn8l44NxF1JXU8zHkNvZ4bpod1szXhzQ4bEXC+ecIlyOBzWcCAFuuAzmowilkcbnIGk+NtFbGt+ondx45uq0owoWlGCrONKCiCjBRBBK1JMEkEV0QKjBRAqUJAU9wo04KCRzu6fJVWvoRXy5p3F0UY7kYOl/EqzvdaN58AVwc5zEWOm9k09P8f47rHKja0zUzY7B0U1rdCCulPRx1Dx27Q+NpuGHa/Vc5zzFjMDHWDZXAajw/oj1XbkcRpeynT0uS2WaeRzWtZkAsGgaW0Cjfa+/ifPRRVEpzGziCSOfhqvE+R7ybEm4d+f8AdNJxxdEOaW25aAk/NZ1x9iueJ9FAL2+MjZoJ/M+Hh5q8uZ2rQ1ziWkjQHp0VXxvAc8MboWDIwmRwtq52wFvUlVyl0Z4XLCyVn9TRPihDeTDldbm7dQRC+ePmASFbq3CRHTDO5znu1t1tr6qsdgYpbm+mYHyWXp5PUcH6dmj4d/qQDoDbKVtHAlV2+EOYfijLTY9Wj7grEoXZZmgnRhB/8rUeAKwR10kJ2nBDepBuPurQk7+C4/TQWlG0qHMiDlZw6TAowVCHI2lEJ2lJA0pKQAKdR3RAqUJAU4Ud0QKB5j+xf/1KrrpXdoWN7zr6AnZd+dwbC8nwVWrJjFVMa0WuDr6qY9b8dNyo52B1ZTEkHJMwXPPULtTDM21txe91UsYxCSgAmf3rStN/AaH7K1usZGi9+6Reyl38vuOPiEmXUCxHQ/0VBA21rgizNxy1UWPTGNzQ6+rhcX3XphLTGLD/AG7j5qF/hKXuFi43s4bpwy1mWFr2sOSidrI4OA0F/VG55LrWNyb6oODibGuqY4wLAjzsqjxTRe5ve61g7Qev9lbsQkLa2Em182Wy5fH8IfhbZx8Qcy1zyLrLPKb8seox7uO1RoWEyRaXLjlt0V+4TtT4hSM5h4zEqsYdAxpa9wu47Kw4H3J2yHU52+neCSM+Lg7cMv8AGol2qJrlA5+qcOR4b0Byka5eZrlK1ykelpSUTXJ0H//Z" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">Shana Clarkson</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>

    </div>
</div>



<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <img src="{{asset('assets/images/img_7_sq.jpg')}}" alt="Image" class="img-fluid rounded
                ">
            </div>
            <div class="col-lg-4 ps-lg-2">
                <div class="mb-5">
                    <h2 class="text-black h4">Publishing platform for professional bloggers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-wallet-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Building your blog</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-pie-chart-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Resources and insights</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-bag-check-fill me-4"></span>
                    </div>
                    <div>
                        <h3>Blog just for you</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection