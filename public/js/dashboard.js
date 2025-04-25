document.addEventListener('DOMContentLoaded', function () {
    // Area Chart: Statistik Pemeriksaan & Penggunaan Obat per Bulan
    var areaChartCanvas = document.getElementById('revenue-chart-canvas')?.getContext('2d');
    if (areaChartCanvas) {
        new Chart(areaChartCanvas, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                datasets: [
                    {
                        label: 'Jumlah Pemeriksaan',
                        backgroundColor: 'rgba(60,141,188,0.3)',
                        borderColor: 'rgba(60,141,188,1)',
                        data: [10, 15, 13, 20, 25, 30, 27],
                        fill: true,
                        tension: 0.3
                    },
                    {
                        label: 'Penggunaan Obat',
                        backgroundColor: 'rgba(0,166,90,0.3)',
                        borderColor: '#00a65a',
                        data: [5, 8, 10, 15, 20, 22, 20],
                        fill: true,
                        tension: 0.3
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#000'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Donut Chart: Distribusi Aktivitas Role Dokter
    var donutChartCanvas = document.getElementById('sales-chart-canvas')?.getContext('2d');
    if (donutChartCanvas) {
        var donutData = {
            labels: ['Aktivitas Pemeriksaan', 'Aktivitas Obat'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#f39c12', '#00a65a']
            }]
        };

        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true
        };

        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        });
    }

    // Line Chart: Statistik Pemeriksaan Pasien
    var lineChartCanvas = document.getElementById('line-chart')?.getContext('2d');
    if (lineChartCanvas) {
        new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                datasets: [{
                    label: 'Jumlah Pemeriksaan Pasien',
                    data: [12, 19, 15, 22, 30, 28, 25],
                    backgroundColor: 'rgba(57, 204, 204, 0.2)',
                    borderColor: '#39CCCC',
                    borderWidth: 2,
                    tension: 0.3,
                    pointBackgroundColor: '#fff',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Pemeriksaan'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffffff'
                        }
                    },
                    title: {
                        display: true,
                        text: 'Statistik Pemeriksaan Pasien oleh Dokter',
                        color: '#ffffff',
                        font: {
                            size: 18
                        }
                    }
                }
            }
        });
    }
});

$(function () {
    // Aktifkan sortable
    $('.todo-list').sortable({
        placeholder: 'sort-highlight',
        handle: '.handle',
        forcePlaceholderSize: true,
        zIndex: 999999
    });

    // Tandai obat sudah diberikan
    $('.todo-list input[type="checkbox"]').change(function () {
        $(this).closest('li').toggleClass('done');
    });

    // Hapus obat dari daftar
    $('.todo-list .fa-trash-o').click(function () {
        if (confirm("Yakin ingin menghapus obat ini?")) {
            $(this).closest('li').remove();
        }
    });

    // Edit nama obat
    $('.todo-list .fa-edit').click(function () {
        const item = $(this).closest('li').find('.text');
        const newText = prompt("Edit nama obat:", item.text());
        if (newText !== null && newText.trim() !== "") {
            item.text(newText);
        }
    });
});
