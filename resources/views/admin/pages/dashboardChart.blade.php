<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Monthly Earn',
                data:{!! json_encode($datas) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                    beginAtZero: true
                }
            }
        }
    });

    var ctx = document.getElementById('chartHoadon').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data : {
        labels: [
            'Đơn hủy',
            'Đơn mới',
            'Đơn đã duyệt',
            'Giao thành công',
            'Đang vận chuyển'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [{{ $ttHuy }}, {{ $ttDonmoi }}, {{ $ttDuyetdon }},{{ $ttGiaoThanhcong }},{{ $ttVanchuyen }}],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(125,211,247)',
            'rgb(255,109,0)'
            ],
            hoverOffset: 4
        }]
        },
    });
</script>
