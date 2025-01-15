            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2025
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
            </div>

            <!-- script -->
            <script src="{{ asset('js/tabler.min.js') }}"></script>
            <script src="{{ asset('js/dataTable/jquery.min.js') }}"></script>
            <script src="{{ asset('js/dataTable/dataTables.min.js') }}"></script>
            <script src="{{ asset('js/dataTable/dataTables.bootstrap5.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTable').DataTable({
                        paging: true,
                        scrollX: true,
                        searching: true,
                        ordering: true,
                        info: true,
                        language: {
                            paginate: {
                                previous: "<",
                                next: ">",
                            },
                            search: "Cari:",
                            lengthMenu: "Tampilkan _MENU_ entri",
                            info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                        },
                        columnDefs: [{
                                width: "5%",
                                targets: 0,
                            },
                            {
                                className: "text-start",
                                targets: [0, 1, 2, 3, 4]
                            }
                        ],
                    });
                });
            </script>

            </body>

            </html>
