<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Helper;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class TataUsaha extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data', 'data');
        $this->load->model('User_Model', 'ud');
        $this->load->model('Tu_Model', 'tu_model');
        $username = $this->session->userdata('username');
        $role = $this->session->userdata('role_id');
        if (empty($username)) {
            redirect('auth');
        }

        if (!$role == 3) {
            $this->load->view('auth');
        }
    }

    public function index()
    {
        // Code Here
    }

    public function random($length)
    {
        $string = '';
        $character = array_merge(range('0', '9'));
        $max = count($character) - 1;
        for ($i = 0; $i < $length; $i++) {
            $random = mt_rand(0, $max);
            $string .= $character[$random];
        }
        return $string;
    }

    /*
    |
    | 
    |
    |
    | Method SMP
    |
    |
    | 
    |
    */
    public function dashboard_smp()
    {
        // Code Here
    }

    public function input_tagihan_smp()
    {
        // Code Here
    }

    public function data_tagihan_smp()
    {
        // Code Here
    }

    public function data_tunggakan_smp()
    {
        // Code Here
    }

    /*
    |
    | 
    |
    |
    | Method SMA
    |
    |
    | 
    |
    */
    public function dashboard_sma()
    {
        // Code Here
    }

    public function input_tagihan_sma()
    {
        // Code Here
    }

    public function data_tagihan_sma()
    {
        // Code Here
    }

    public function data_tunggakan_sma()
    {
        // Code Here
    }

    /*
    |
    | 
    |
    |
    | Method SMK
    |
    |
    | 
    |
    */
    public function dashboard_smk()
    {
        $role = $this->session->userdata('role_id');
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        $data['mm'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'MM');
        $data['rpl'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'RPL');
        $data['tkj'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'TKJ');
        $data['pspt'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'PSPT');
        $data['dkv'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'DKV');
        $data['otkp'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'OTKP');
        $data['akl'] = $this->tu_model->counting_class('tb_siswa', 'jurusan', 'AKL');
        $data['pns'] = $this->tu_model->counting_class('tb_data_guru', 'status_kepegawaian', 'GTY/PTY');
        $data['gty'] = $this->tu_model->counting_class('tb_data_guru', 'status_kepegawaian', 'PNS');
        $data['honor'] = $this->tu_model->counting_class('tb_data_guru', 'status_kepegawaian', 'Guru Honor Sekolah');
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/dashboard', $data);
        $this->load->view('template/template_footer', $data);
        // if ($role == 3) {
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/dashboard', $data);
        //     $this->load->view('template/template_footer', $data);
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function input_tagihan_smk()
    {
        $data = [
            'no_tagihan' => htmlspecialchars($this->input->post('no_tagihan')),
            'jenis_tagihan' => htmlspecialchars($this->input->post('jenis_tagihan')),
            'jumlah_tagihan' => htmlspecialchars($this->input->post('jumlah')),
            'kategori_tagihan' => htmlspecialchars($this->input->post('kategori'))
        ];

        $result = $this->db->insert('tb_tagihan', $data);
        if ($result) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Sukses membuat tagihan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_tagihan_smk');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    Gagal membuat tagihan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_tagihan_smk');
        }
    }

    public function data_tagihan_smk()
    {
        // $role = $this->session->userdata('role_id');
        // $data['get_data'] = $this->ud->tagihan();
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        function acak($length)
        {
            $string = '';
            $character = array_merge(range(
                '0',
                '9'
            ));
            $max = count($character) - 1;
            for ($i = 0; $i < $length; $i++) {
                $random = mt_rand(0, $max);
                $string .= $character[$random];
            }
            return $string;
        }
        $data['no_acak'] = acak(10);
        $data['get_data'] = $this->db->get('tb_tagihan')->result_array();
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/data_tagihan', $data);
        $this->load->view('template/template_footer');
        // if ($role == 3) {
        //     // $data['get_data'] = $this->ud->tagihan();
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['username'] = $this->session->userdata('username');
        //     function acak($length)
        //     {
        //         $string = '';
        //         $character = array_merge(range(
        //             '0',
        //             '9'
        //         ));
        //         $max = count($character) - 1;
        //         for ($i = 0; $i < $length; $i++) {
        //             $random = mt_rand(0, $max);
        //             $string .= $character[$random];
        //         }
        //         return $string;
        //     }
        //     $data['no_acak'] = acak(10);
        //     $data['get_data'] = $this->db->get('tb_tagihan')->result_array();
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/data_tagihan', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function data_pembayaran_smk()
    {
        // $role = $this->session->userdata('role_id');
        function random($length)
        {
            $string = '';
            $character = array_merge(range(
                '0',
                '9'
            ));
            $max = count($character) - 1;
            for ($i = 0; $i < $length; $i++) {
                $random = mt_rand(0, $max);
                $string .= $character[$random];
            }
            return $string;
        }

        $data['get_data_siswa'] = $this->db->get('tb_siswa')->result_array();
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        $data['join'] = $this->data->join();
        $data['random'] = random(10);
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/data_pembayaran', $data);
        $this->load->view('template/template_footer');
        // if ($role == 3) {
        //     function random($length)
        //     {
        //         $string = '';
        //         $character = array_merge(range(
        //             '0',
        //             '9'
        //         ));
        //         $max = count($character) - 1;
        //         for ($i = 0; $i < $length; $i++) {
        //             $random = mt_rand(0, $max);
        //             $string .= $character[$random];
        //         }
        //         return $string;
        //     }

        //     $data['get_data_siswa'] = $this->db->get('tb_siswa')->result_array();
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['username'] = $this->session->userdata('username');
        //     $data['join'] = $this->data->join();
        //     $data['random'] = random(10);
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/data_pembayaran', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function data_tunggakan_smk()
    {
        // Code Here
    }

    public function insert_payment()
    {
        // $role = $this->session->userdata('role_id');
        $nowDate = date("d M Y");
        $data = [
            'nisn' => htmlspecialchars($this->input->post('nisn')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'no_pembayaran' => htmlspecialchars($this->input->post('no_pembayaran')),
            'jenis_pembayaran' => htmlspecialchars($this->input->post('jenis_pembayaran')),
            'jumlah_pembayaran' => htmlspecialchars($this->input->post('nominal_pembayaran')),
            'tanggal_pembayaran' => $nowDate,
            'status_pembayaran' => 'Lunas'
        ];

        $insert = $this->db->insert('tb_pembayaran', $data);
        if ($insert) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                Sukses Melakukan Pembayaran
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('tatausaha/data_pembayaran_smk');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                Gagal Melakukan Pembayaran
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('tatausaha/data_pembayaran_smk');
        }
        // if ($role == 3) {
        //     $nowDate = date("d M Y");
        //     $data = [
        //         'nisn' => htmlspecialchars($this->input->post('nisn')),
        //         'nama' => htmlspecialchars($this->input->post('nama')),
        //         'kelas' => htmlspecialchars($this->input->post('kelas')),
        //         'no_pembayaran' => htmlspecialchars($this->input->post('no_pembayaran')),
        //         'jenis_pembayaran' => htmlspecialchars($this->input->post('jenis_pembayaran')),
        //         'jumlah_pembayaran' => htmlspecialchars($this->input->post('nominal_pembayaran')),
        //         'tanggal_pembayaran' => $nowDate,
        //         'status_pembayaran' => 'Lunas'
        //     ];

        //     $insert = $this->db->insert('tb_pembayaran', $data);
        //     if ($insert) {
        //         $this->session->set_flashdata(
        //             'massage',
        //             '<div class="alert alert-success alert-dismissable fade show" role="alert">
        //         Sukses Melakukan Pembayaran
        //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //             <span aria-hidden="true">&times;</span>
        //         </button>
        //     </div>'
        //         );
        //         redirect('tatausaha/data_pembayaran_smk');
        //     } else {
        //         $this->session->set_flashdata(
        //             'massage',
        //             '<div class="alert alert-danger alert-dismissable fade show" role="alert">
        //         Gagal Melakukan Pembayaran
        //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //             <span aria-hidden="true">&times;</span>
        //         </button>
        //     </div>'
        //         );
        //         redirect('tatausaha/data_pembayaran_smk');
        //     }
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function history($nisn)
    {
        $data['view'] = $this->db->get_where('tb_pembayaran', ['nisn' => $nisn])->result_array();
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/history', $data);
        $this->load->view('template/template_footer');
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $data['view'] = $this->db->get_where('tb_pembayaran', ['nisn' => $nisn])->result_array();
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['username'] = $this->session->userdata('username');
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/history', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function print_history_pembayaran_pdf($nisn)
    {
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 8
        ]);
        $mpdf->debug = true;
        $data['view'] = $this->db->get_where('tb_pembayaran', ['nisn' => $nisn])->result_array();
        $html = $this->load->view('tatausaha/print_history', $data, true);
        $mpdf->WriteHtml($html);
        $mpdf->Output('Cetak-data-pembayaran.pdf', \Mpdf\Output\Destination::DOWNLOAD);
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $mpdf = new \Mpdf\Mpdf([
        //         'default_font_size' => 8
        //     ]);
        //     $mpdf->debug = true;
        //     $data['view'] = $this->db->get_where('tb_pembayaran', ['nisn' => $nisn])->result_array();
        //     $html = $this->load->view('tatausaha/print_history', $data, true);
        //     $mpdf->WriteHtml($html);
        //     $mpdf->Output('Cetak-data-pembayaran.pdf', \Mpdf\Output\Destination::DOWNLOAD);
        // } else {
        // }
    }

    public function print_history_pembayaran_excel($nisn)
    {
    }

    public function data_siswa_kelas_x()
    {
        $data['get_data'] = $this->db->get('tb_data_siswa')->result_array();
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/data_siswa_kelas_X', $data);
        $this->load->view('template/template_footer');
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $data['get_data'] = $this->db->get('tb_data_siswa')->result_array();
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['username'] = $this->session->userdata('username');
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/data_siswa_kelas_X', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function data_siswa()
    {
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['get_data'] = $this->db->get('tb_data_siswa')->result_array();
        $data['get_data_siswa'] = $this->db->get('tb_siswa')->result_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/data_siswa', $data);
        $this->load->view('template/template_footer');
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['get_data'] = $this->db->get('tb_data_siswa')->result_array();
        //     $data['get_data_siswa'] = $this->db->get('tb_siswa')->result_array();
        //     $data['username'] = $this->session->userdata('username');
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/data_siswa', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function print_data_siswa_pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->debug = true;
        $data['get_data_siswa'] = $this->db->get('tb_siswa')->result_array();
        $html = $this->load->view('tatausaha/print', $data, true);
        $mpdf->WriteHtml($html);
        $mpdf->Output('Cetak-data-siswa.pdf', \Mpdf\Output\Destination::DOWNLOAD);
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $mpdf = new \Mpdf\Mpdf();
        //     $mpdf->debug = true;
        //     $data['get_data_siswa'] = $this->db->get('tb_siswa')->result_array();
        //     $html = $this->load->view('tatausaha/print', $data, true);
        //     $mpdf->WriteHtml($html);
        //     $mpdf->Output('Cetak-data-siswa.pdf', \Mpdf\Output\Destination::DOWNLOAD);
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function print_data_siswa_excel()
    {
        $i = 6; //Row 6
        $no = 1;
        $data = $this->db->get('tb_siswa')->result_array();
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()->setCreator('M Ade Maulana')
            ->setTitle('Office 2007 XLSX Test Document')
            ->setSubject('Office 2007 XLSX Test Document')
            ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Test result file');
        $timezone = date_create(timezone_open("Asia/Bangkok"));
        $tz = date_timezone_get($timezone);
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Data Pembayaran')
            ->setCellValue('A2', 'Laporan Pembayaran Siswa')
            ->setCellValue('A4', 'Waktu Unduh : ' . date($tz, 'd-F-Y h:i:s A'))
            ->setCellValue('A5', 'No')
            ->setCellValue('B5', 'Nisn')
            ->setCellValue('C5', 'Nik')
            ->setCellValue('D5', 'Nama')
            ->setCellValue('E5', 'Kelas')
            ->setCellValue('F5', 'Jurusan')
            ->setCellValue('G5', 'Tempat Lahir')
            ->setCellValue('H5', 'Tanggal Lahir')
            ->setCellValue('I5', 'Status Siswa');
        foreach ($data as $dt) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $i, $no++)
                ->setCellValue('B' . $i, $dt['nisn'])
                ->setCellValue('C' . $i, $dt['nik'])
                ->setCellValue('D' . $i, $dt['nama'])
                ->setCellValue('E' . $i, $dt['kelas'])
                ->setCellValue('F' . $i, $dt['jurusan'])
                ->setCellValue('G' . $i, $dt['tempat_lahir'])
                ->setCellValue('H' . $i, $dt['tanggal_lahir'])
                ->setCellValue('I' . $i, $dt['status']);
        }

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_LEFT
            ]
        ];
        $r = 5;
        $spreadsheet->getActiveSheet()->getStyle('A' . $r++ . ':I' . $r++)->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);

        $spreadsheet->getActiveSheet()->setTitle('Data Siswa' . date('d-m-Y H'));
        $spreadsheet->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Data Siswa.xlsx"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $i = 6; //Row 6
        //     $no = 1;
        //     $data = $this->db->get('tb_siswa')->result_array();
        //     $spreadsheet = new Spreadsheet();
        //     $spreadsheet->getProperties()->setCreator('M Ade Maulana')
        //         ->setTitle('Office 2007 XLSX Test Document')
        //         ->setSubject('Office 2007 XLSX Test Document')
        //         ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        //         ->setKeywords('office 2007 openxml php')
        //         ->setCategory('Test result file');
        //     $timezone = date_create(null, timezone_open("Asia/Bangkok"));
        //     $tz = date_timezone_get($timezone);
        //     $spreadsheet->setActiveSheetIndex(0)
        //         ->setCellValue('A1', 'Data Pembayaran')
        //         ->setCellValue('A2', 'Laporan Pembayaran Siswa')
        //         ->setCellValue('A4', 'Waktu Unduh : ' . date($tz, 'd-F-Y h:i:s A'))
        //         ->setCellValue('A5', 'No')
        //         ->setCellValue('B5', 'Nisn')
        //         ->setCellValue('C5', 'Nik')
        //         ->setCellValue('D5', 'Nama')
        //         ->setCellValue('E5', 'Kelas')
        //         ->setCellValue('F5', 'Jurusan')
        //         ->setCellValue('G5', 'Tempat Lahir')
        //         ->setCellValue('H5', 'Tanggal Lahir')
        //         ->setCellValue('I5', 'Status Siswa');
        //     foreach ($data as $dt) {
        //         $spreadsheet->setActiveSheetIndex(0)
        //             ->setCellValue('A' . $i, $no++)
        //             ->setCellValue('B' . $i, $dt['nisn'])
        //             ->setCellValue('C' . $i, $dt['nik'])
        //             ->setCellValue('D' . $i, $dt['nama'])
        //             ->setCellValue('E' . $i, $dt['kelas'])
        //             ->setCellValue('F' . $i, $dt['jurusan'])
        //             ->setCellValue('G' . $i, $dt['tempat_lahir'])
        //             ->setCellValue('H' . $i, $dt['tanggal_lahir'])
        //             ->setCellValue('I' . $i, $dt['status']);
        //     }

        //     $styleArray = [
        //         'borders' => [
        //             'allBorders' => [
        //                 'borderStyle' => Border::BORDER_THIN,
        //                 'color' => ['argb' => 'FF000000'],
        //             ],
        //         ],
        //         'alignment' => [
        //             'horizontal' => Alignment::HORIZONTAL_LEFT
        //         ]
        //     ];
        //     $r = 5;
        //     $spreadsheet->getActiveSheet()->getStyle('A' . $r++ . ':I' . $r++)->applyFromArray($styleArray);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        //     $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);

        //     $spreadsheet->getActiveSheet()->setTitle('Data Siswa' . date('d-m-Y H'));
        //     $spreadsheet->setActiveSheetIndex(0);
        //     header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        //     header('Content-Disposition: attachment;filename="Data Siswa.xlsx"');
        //     header('Cache-Control: max-age=0');
        //     header('Cache-Control: max-age=1');
        //     $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        //     $writer->save('php://output');
        //     exit;
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function data_siswa_kelas_xii()
    {
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/data_siswa_kelas_XII', $data);
        $this->load->view('template/template_footer');
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['username'] = $this->session->userdata('username');
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/data_siswa_kelas_XII', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    public function data_alumni()
    {
        // Code Here
    }

    public function data_guru()
    {
        $data['get_data'] = $this->db->get('tb_data_guru')->result_array();
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('tatausaha/data_guru', $data);
        $this->load->view('template/template_footer');
        // $role = $this->session->userdata('role_id');
        // if ($role == 3) {
        //     $data['get_data'] = $this->db->get('tb_data_guru')->result_array();
        //     $data['role'] = $this->db->get_where('tb_user', ['role_id' => 3])->row_array();
        //     $data['username'] = $this->session->userdata('username');
        //     $this->load->view('template/template_header', $data);
        //     $this->load->view('tatausaha/data_guru', $data);
        //     $this->load->view('template/template_footer');
        // } else {
        //     $this->load->view('errors/html/error_404.php');
        // }
    }

    /*
    |
    | 
    |
    |
    | Method System
    | Upload Data Siswa
    |
    | 
    |
    */
    public function upload_data_siswa()
    {
        // Load form validation library
        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fileURL', 'Upload File', 'callback_checkFileValidation');
        if ($this->form_validation->run() == false) {
            $this->load->view('tatausaha/data_siswa_kelas_x', $data);
        } else {
            // If file uploaded
            if (!empty($_FILES['fileURL']['name'])) {
                // get file extension
                $extension = pathinfo($_FILES['fileURL']['name'], PATHINFO_EXTENSION);

                if ($extension == 'csv') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } elseif ($extension == 'xlsx') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }
                // file path
                $spreadsheet = $reader->load($_FILES['fileURL']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array(
                    'Nama',
                    'Nipd',
                    'Jenis_Kelamin',
                    'Nisn',
                    'Tempat_Lahir',
                    'Tanggal_Lahir',
                    'Nik_Siswa',
                    'Agama',
                    'Alamat',
                    'RT',
                    'RW',
                    'Dusun',
                    'Kelurahan',
                    'Kecamatan',
                    'Kode_Pos',
                    'Jenis_Tinggal',
                    'Transportasi',
                    'Telepon',
                    'HP',
                    'Email',
                    'SKHUN',
                    'Penerima_KPS',
                    'No_KPS',
                    'Nama_Ayah',
                    'Tahun_Lahir_Ayah',
                    'Pendidikan_Ayah',
                    'Pekerjaan_Ayah',
                    'Penghasilan_Ayah',
                    'Nik_Ayah',
                    'Nama_Ibu',
                    'Tahun_Lahir_Ibu',
                    'Pendidikan_Ibu',
                    'Pekerjaan_Ibu',
                    'Penghasilan_Ibu',
                    'Nik_Ibu',
                    'Nama_Wali',
                    'Tahun_Lahir_Wali',
                    'Pendidikan_Wali',
                    'Pekerjaan_Wali',
                    'Penghasilan_Wali',
                    'Nik_Wali',
                    'Rombel',
                    'No_Peserta_UN',
                    'No_Ijazah',
                    'Penerima_KIP',
                    'No_KIP',
                    'Nama_KIP',
                    'Nomor_KKS',
                    'No_Akta_Lahir',
                    'Bank',
                    'No_Rek_Bank',
                    'Rek_Atas_Nama',
                    'Layak_PIP',
                    'Alasan_Layak_PIP',
                    'Kebutuhan_Khusus',
                    'Sekolah_Asal',
                    'Anak_Ke_Berapa',
                    'Lintang',
                    'Bujur',
                    'No_KK',
                    'Berat_Badan',
                    'Tinggi_Badan',
                    'Lingkar_Kepala',
                    'Jumlah_Saudara',
                    'Jarak_Rumah'
                );
                $makeArray = array(
                    'Nama' => 'Nama',
                    'Nipd' => 'Nipd',
                    'Jenis_Kelamin' => 'Jenis_Kelamin',
                    'Nisn' => 'Nisn',
                    'Tempat_Lahir' => 'Tempat_Lahir',
                    'Tanggal_Lahir' => 'Tanggal_Lahir',
                    'Nik_Siswa' => 'Nik_Siswa',
                    'Agama' => 'Agama',
                    'Alamat' => 'Alamat',
                    'RT' => 'RT',
                    'RW' => 'RW',
                    'Dusun' => 'Dusun',
                    'Kelurahan' => 'Kelurahan',
                    'Kecamatan' => 'Kecamatan',
                    'Kode_Pos' => 'Kode_Pos',
                    'Jenis_Tinggal' => 'Jenis_Tinggal',
                    'Transportasi' => 'Transportasi',
                    'Telepon' => 'Telepon',
                    'HP' => 'HP',
                    'Email' => 'Email',
                    'SKHUN' => 'SKHUN',
                    'Penerima_KPS' => 'Penerima_KPS',
                    'No_KPS' => 'No_KPS',
                    'Nama_Ayah' => 'Nama_Ayah',
                    'Tahun_Lahir_Ayah' => 'Tahun_Lahir_Ayah',
                    'Pendidikan_Ayah' => 'Pendidikan_Ayah',
                    'Pekerjaan_Ayah' => 'Pekerjaan_Ayah',
                    'Penghasilan_Ayah' => 'Penghasilan_Ayah',
                    'Nik_Ayah' => 'Nik_Ayah',
                    'Nama_Ibu' => 'Nama_Ibu',
                    'Tahun_Lahir_Ibu' => 'Tahun_Lahir_Ibu',
                    'Pendidikan_Ibu' => 'Pendidikan_Ibu',
                    'Pekerjaan_Ibu' => 'Pekerjaan_Ibu',
                    'Penghasilan_Ibu' => 'Penghasilan_Ibu',
                    'Nik_Ibu' => 'Nik_Ibu',
                    'Nama_Wali' => 'Nama_Wali',
                    'Tahun_Lahir_Wali' => 'Tahun_Lahir_Wali',
                    'Pendidikan_Wali' => 'Pendidikan_Wali',
                    'Pekerjaan_Wali' => 'Pekerjaan_Wali',
                    'Penghasilan_Wali' => 'Penghasilan_Wali',
                    'Nik_Wali' => 'Nik_Wali',
                    'Rombel' => 'Rombel',
                    'No_Peserta_UN' => 'No_Peserta_UN',
                    'No_Ijazah' => 'No_Ijazah',
                    'Penerima_KIP' => 'Penerima_KIP',
                    'No_KIP' => 'No_KIP',
                    'Nama_KIP' => 'Nama_KIP',
                    'Nomor_KKS' => 'Nomor_KKS',
                    'No_Akta_Lahir' => 'No_Akta_Lahir',
                    'Bank' => 'Bank',
                    'No_Rek_Bank' => 'No_Rek_Bank',
                    'Rek_Atas_Nama' => 'Rek_Atas_Nama',
                    'Layak_PIP' => 'Layak_PIP',
                    'Alasan_Layak_PIP' => 'Alasan_Layak_PIP',
                    'Kebutuhan_Khusus' => 'Kebutuhan_Khusus',
                    'Sekolah_Asal' => 'Sekolah_Asal',
                    'Anak_Ke_Berapa' => 'Anak_Ke_Berapa',
                    'Lintang' => 'Lintang',
                    'Bujur' => 'Bujur',
                    'No_KK' => 'No_KK',
                    'Berat_Badan' => 'Berat_Badan',
                    'Tinggi_Badan' => 'Tinggi_Badan',
                    'Lingkar_Kepala' => 'Lingkar_Kepala',
                    'Jumlah_Saudara' => 'Jumlah_Saudara',
                    'Jarak_Rumah' => 'Jarak_Rumah'
                );
                $SheetDataKey = array();
                foreach ($allDataInSheet as $dataInSheet) {
                    foreach ($dataInSheet as $key => $value) {
                        if (in_array(trim($value), $createArray)) {
                            $value = preg_replace('/\s+/', '', $value);
                            $SheetDataKey[trim($value)] = $key;
                        }
                    }
                }
                $dataDiff = array_diff_key($makeArray, $SheetDataKey);
                if (empty($dataDiff)) {
                    $flag = 1;
                }
                // match excel sheet column
                if ($flag == 1) {
                    for ($i = 2; $i <= $arrayCount; $i++) {
                        $addresses = array();
                        $nama = $SheetDataKey['Nama'];
                        $nipd = $SheetDataKey['Nipd'];
                        $jenis_kelamin = $SheetDataKey['Jenis_Kelamin'];
                        $nisn = $SheetDataKey['Nisn'];
                        $tempat_lahir = $SheetDataKey['Tempat_Lahir'];
                        $tanggal_lahir = $SheetDataKey['Tanggal_Lahir'];
                        $nik_siswa = $SheetDataKey['Nik_Siswa'];
                        $agama = $SheetDataKey['Agama'];
                        $alamat = $SheetDataKey['Alamat'];
                        $rt = $SheetDataKey['RT'];
                        $rw = $SheetDataKey['RW'];
                        $dusun = $SheetDataKey['Dusun'];
                        $kelurahan = $SheetDataKey['Kelurahan'];
                        $kecamatan = $SheetDataKey['Kecamatan'];
                        $kode_pos = $SheetDataKey['Kode_Pos'];
                        $jenis_tinggal = $SheetDataKey['Jenis_Tinggal'];
                        $transportasi = $SheetDataKey['Transportasi'];
                        $telepon = $SheetDataKey['Telepon'];
                        $hp = $SheetDataKey['HP'];
                        $email = $SheetDataKey['Email'];
                        $skhun = $SheetDataKey['SKHUN'];
                        $penerima_kps = $SheetDataKey['Penerima_KPS'];
                        $no_kps = $SheetDataKey['No_KPS'];
                        // Data Ayah
                        $nama_ayah = $SheetDataKey['Nama_Ayah'];
                        $tahun_lahir_ayah = $SheetDataKey['Tahun_Lahir_Ayah'];
                        $pendidikan_ayah = $SheetDataKey['Pendidikan_Ayah'];
                        $pekerjaan_ayah = $SheetDataKey['Pekerjaan_Ayah'];
                        $penghasilan_ayah = $SheetDataKey['Penghasilan_Ayah'];
                        $nik_ayah = $SheetDataKey['Nik_Ayah'];
                        // Data Ibu
                        $nama_ibu = $SheetDataKey['Nama_Ibu'];
                        $tahun_lahir_ibu = $SheetDataKey['Tahun_Lahir_Ibu'];
                        $pendidikan_ibu = $SheetDataKey['Pendidikan_Ibu'];
                        $pekerjaan_ibu = $SheetDataKey['Pekerjaan_Ibu'];
                        $penghasilan_ibu = $SheetDataKey['Penghasilan_Ibu'];
                        $nik_ibu = $SheetDataKey['Nik_Ibu'];
                        // Data Wali
                        $nama_wali = $SheetDataKey['Nama_Wali'];
                        $tahun_lahir_wali = $SheetDataKey['Tahun_Lahir_Wali'];
                        $pendidikan_wali = $SheetDataKey['Pendidikan_Wali'];
                        $pekerjaan_wali = $SheetDataKey['Pekerjaan_Wali'];
                        $penghasilan_wali = $SheetDataKey['Penghasilan_Wali'];
                        $nik_wali = $SheetDataKey['Nik_Wali'];
                        // Data Siswa
                        $rombel = $SheetDataKey['Rombel'];
                        $no_peserta_un = $SheetDataKey['No_Peserta_UN'];
                        $no_ijazah = $SheetDataKey['No_Ijazah'];
                        $penerima_kip = $SheetDataKey['Penerima_KIP'];
                        $no_kip = $SheetDataKey['No_KIP'];
                        $nama_kip = $SheetDataKey['Nama_KIP'];
                        $nomor_kks = $SheetDataKey['Nomor_KKS'];
                        $no_akta_lahir = $SheetDataKey['No_Akta_Lahir'];
                        // Data Bank
                        $bank = $SheetDataKey['Bank'];
                        $no_rek_bank = $SheetDataKey['No_Rek_Bank'];
                        $rek_atas_nama = $SheetDataKey['Rek_Atas_Nama'];
                        // Data Lain
                        $layak_pip = $SheetDataKey['Layak_PIP'];
                        $alasan_pip = $SheetDataKey['Alasan_Layak_PIP'];
                        $kebutuhan_khusus = $SheetDataKey['Kebutuhan_Khusus'];
                        $sekolah_asal = $SheetDataKey['Sekolah_Asal'];
                        $anak_ke = $SheetDataKey['Anak_Ke_Berapa'];
                        $lintang = $SheetDataKey['Lintang'];
                        $bujur = $SheetDataKey['Bujur'];
                        $no_kk = $SheetDataKey['No_KK'];
                        $berat_badan = $SheetDataKey['Berat_Badan'];
                        $tinggi_badan = $SheetDataKey['Tinggi_Badan'];
                        $lingkar_kepala = $SheetDataKey['Lingkar_Kepala'];
                        $jumlah_saudara = $SheetDataKey['Jumlah_Saudara'];
                        $jarak_rumah = $SheetDataKey['Jarak_Rumah'];

                        // Data Trim
                        $nama = filter_var(trim($allDataInSheet[$i][$nama]), FILTER_SANITIZE_STRING);
                        $nipd = filter_var(trim($allDataInSheet[$i][$nipd]), FILTER_SANITIZE_STRING);
                        $jenis_kelamin = filter_var(trim($allDataInSheet[$i][$jenis_kelamin]), FILTER_SANITIZE_STRING);
                        $nisn = filter_var(trim($allDataInSheet[$i][$nisn]), FILTER_SANITIZE_STRING);
                        $tempat_lahir = filter_var(trim($allDataInSheet[$i][$tempat_lahir]), FILTER_SANITIZE_STRING);
                        $tanggal_lahir = filter_var(trim($allDataInSheet[$i][$tanggal_lahir]), FILTER_SANITIZE_STRING);
                        $nik_siswa = filter_var(trim($allDataInSheet[$i][$nik_siswa]), FILTER_SANITIZE_STRING);
                        $agama = filter_var(trim($allDataInSheet[$i][$agama]), FILTER_SANITIZE_STRING);
                        $alamat = filter_var(trim($allDataInSheet[$i][$alamat]), FILTER_SANITIZE_STRING);
                        $rt = filter_var(trim($allDataInSheet[$i][$rt]), FILTER_SANITIZE_STRING);
                        $rw = filter_var(trim($allDataInSheet[$i][$rw]), FILTER_SANITIZE_STRING);
                        $dusun = filter_var(trim($allDataInSheet[$i][$dusun]), FILTER_SANITIZE_STRING);
                        $kelurahan = filter_var(trim($allDataInSheet[$i][$kelurahan]), FILTER_SANITIZE_STRING);
                        $kecamatan = filter_var(trim($allDataInSheet[$i][$kecamatan]), FILTER_SANITIZE_STRING);
                        $kode_pos = filter_var(trim($allDataInSheet[$i][$kode_pos]), FILTER_SANITIZE_STRING);
                        $jenis_tinggal = filter_var(trim($allDataInSheet[$i][$jenis_tinggal]), FILTER_SANITIZE_STRING);
                        $$transportasi = filter_var(trim($allDataInSheet[$i][$transportasi]), FILTER_SANITIZE_STRING);
                        $telepon = filter_var(trim($allDataInSheet[$i][$telepon]), FILTER_SANITIZE_STRING);
                        $hp = filter_var(trim($allDataInSheet[$i][$hp]), FILTER_SANITIZE_STRING);
                        $email = filter_var(trim($allDataInSheet[$i][$email]), FILTER_SANITIZE_EMAIL);
                        $skhun = filter_var(trim($allDataInSheet[$i][$skhun]), FILTER_SANITIZE_STRING);
                        $penerima_kps = filter_var(trim($allDataInSheet[$i][$penerima_kps]), FILTER_SANITIZE_STRING);
                        $no_kps = filter_var(trim($allDataInSheet[$i][$no_kps]), FILTER_SANITIZE_STRING);
                        // Data Trim Ayah
                        $nama_ayah = filter_var(trim($allDataInSheet[$i][$nama_ayah]), FILTER_SANITIZE_STRING);
                        $tahun_lahir_ayah = filter_var(trim($allDataInSheet[$i][$tahun_lahir_ayah]), FILTER_SANITIZE_STRING);
                        $pendidikan_ayah = filter_var(trim($allDataInSheet[$i][$pendidikan_ayah]), FILTER_SANITIZE_STRING);
                        $pekerjaan_ayah = filter_var(trim($allDataInSheet[$i][$pekerjaan_ayah]), FILTER_SANITIZE_STRING);
                        $penghasilan_ayah = filter_var(trim($allDataInSheet[$i][$penghasilan_ayah]), FILTER_SANITIZE_STRING);
                        $nik_ayah = filter_var(trim($allDataInSheet[$i][$nik_ayah]), FILTER_SANITIZE_STRING);
                        // Data Trim Ibu
                        $nama_ibu = filter_var(trim($allDataInSheet[$i][$nama_ibu]), FILTER_SANITIZE_STRING);
                        $tahun_lahir_ibu = filter_var(trim($allDataInSheet[$i][$tahun_lahir_ibu]), FILTER_SANITIZE_STRING);
                        $pendidikan_ibu = filter_var(trim($allDataInSheet[$i][$pendidikan_ibu]), FILTER_SANITIZE_STRING);
                        $pekerjaan_ibu = filter_var(trim($allDataInSheet[$i][$pekerjaan_ibu]), FILTER_SANITIZE_STRING);
                        $penghasilan_ibu = filter_var(trim($allDataInSheet[$i][$penghasilan_ibu]), FILTER_SANITIZE_STRING);
                        $nik_ibu = filter_var(trim($allDataInSheet[$i][$nik_ibu]), FILTER_SANITIZE_STRING);
                        // Data Trim Wali
                        $nama_wali = filter_var(trim($allDataInSheet[$i][$nama_wali]), FILTER_SANITIZE_STRING);
                        $tahun_lahir_wali = filter_var(trim($allDataInSheet[$i][$tahun_lahir_wali]), FILTER_SANITIZE_STRING);
                        $pendidikan_wali = filter_var(trim($allDataInSheet[$i][$pendidikan_wali]), FILTER_SANITIZE_STRING);
                        $pekerjaan_wali = filter_var(trim($allDataInSheet[$i][$pekerjaan_wali]), FILTER_SANITIZE_STRING);
                        $penghasilan_wali = filter_var(trim($allDataInSheet[$i][$penghasilan_wali]), FILTER_SANITIZE_STRING);
                        $nik_wali = filter_var(trim($allDataInSheet[$i][$nik_wali]), FILTER_SANITIZE_STRING);
                        // Data Siswa
                        $rombel = filter_var(trim($allDataInSheet[$i][$rombel]), FILTER_SANITIZE_STRING);
                        $no_peserta_un = filter_var(trim($allDataInSheet[$i][$no_peserta_un]), FILTER_SANITIZE_STRING);
                        $no_ijazah = filter_var(trim($allDataInSheet[$i][$no_ijazah]), FILTER_SANITIZE_STRING);
                        $penerima_kip = filter_var(trim($allDataInSheet[$i][$penerima_kip]), FILTER_SANITIZE_STRING);
                        $no_kip = filter_var(trim($allDataInSheet[$i][$no_kip]), FILTER_SANITIZE_STRING);
                        $nama_kip = filter_var(trim($allDataInSheet[$i][$nama_kip]), FILTER_SANITIZE_STRING);
                        $nomor_kks = filter_var(trim($allDataInSheet[$i][$nomor_kks]), FILTER_SANITIZE_STRING);
                        $no_akta_lahir = filter_var(trim($allDataInSheet[$i][$no_akta_lahir]), FILTER_SANITIZE_STRING);
                        // Data bank
                        $bank = filter_var(trim($allDataInSheet[$i][$bank]), FILTER_SANITIZE_STRING);
                        $no_rek_bank = filter_var(trim($allDataInSheet[$i][$no_rek_bank]), FILTER_SANITIZE_STRING);
                        $rek_atas_nama = filter_var(trim($allDataInSheet[$i][$rek_atas_nama]), FILTER_SANITIZE_STRING);
                        // Data Lain
                        $layak_pip = filter_var(trim($allDataInSheet[$i][$layak_pip]), FILTER_SANITIZE_STRING);
                        $alasan_pip = filter_var(trim($allDataInSheet[$i][$alasan_pip]), FILTER_SANITIZE_STRING);
                        $kebutuhan_khusus = filter_var(trim($allDataInSheet[$i][$kebutuhan_khusus]), FILTER_SANITIZE_STRING);
                        $sekolah_asal = filter_var(trim($allDataInSheet[$i][$sekolah_asal]), FILTER_SANITIZE_STRING);
                        $anak_ke = filter_var(trim($allDataInSheet[$i][$anak_ke]), FILTER_SANITIZE_STRING);
                        $lintang = filter_var(trim($allDataInSheet[$i][$lintang]), FILTER_SANITIZE_STRING);
                        $bujur = filter_var(trim($allDataInSheet[$i][$bujur]), FILTER_SANITIZE_STRING);
                        $no_kk = filter_var(trim($allDataInSheet[$i][$no_kk]), FILTER_SANITIZE_STRING);
                        $berat_badan = filter_var(trim($allDataInSheet[$i][$berat_badan]), FILTER_SANITIZE_STRING);
                        $tinggi_badan = filter_var(trim($allDataInSheet[$i][$tinggi_badan]), FILTER_SANITIZE_STRING);
                        $lingkar_kepala = filter_var(trim($allDataInSheet[$i][$lingkar_kepala]), FILTER_SANITIZE_STRING);
                        $jumlah_saudara = filter_var(trim($allDataInSheet[$i][$jumlah_saudara]), FILTER_SANITIZE_STRING);
                        $jarak_rumah = filter_var(trim($allDataInSheet[$i][$jarak_rumah]), FILTER_SANITIZE_STRING);

                        $fetchData[] = array(
                            'nama' => $nama,
                            'nipd' => $nipd,
                            'jenis_kelamin' => $jenis_kelamin,
                            'nisn' => $nisn,
                            'tempat_lahir' => $tempat_lahir,
                            'tanggal_lahir' => $tanggal_lahir,
                            'nik_siswa' => $nik_siswa,
                            'agama' => $agama,
                            'alamat' => $alamat,
                            'rt' => $rt,
                            'rw' => $rw,
                            'dusun' => $dusun,
                            'kelurahan' => $kelurahan,
                            'kecamatan' => $kecamatan,
                            'kode_pos' => $kode_pos,
                            'jenis_tinggal' => $jenis_tinggal,
                            'transportasi' => $transportasi,
                            'telepon' => $telepon,
                            'hp' => $hp,
                            'email' => $email,
                            'skhun' => $skhun,
                            'penerima_kps' => $penerima_kps,
                            'no_kps' => $no_kps,
                            'nama_ayah' => $nama_ayah,
                            'tahun_lahir_ayah' => $tahun_lahir_ayah,
                            'pendidikan_ayah' => $pendidikan_ayah,
                            'pekerjaan_ayah' => $pekerjaan_ayah,
                            'penghasilan_ayah' => $penghasilan_ayah,
                            'nik_ayah' => $nik_ibu,
                            'nama_ibu' => $nama_ibu,
                            'tahun_lahir_ibu' => $tahun_lahir_ibu,
                            'pendidikan_ibu' => $pendidikan_ibu,
                            'pekerjaan_ibu' => $pekerjaan_ibu,
                            'penghasilan_ibu' => $penghasilan_ibu,
                            'nik_ibu' => $nik_ibu,
                            'nama_wali' => $nama_wali,
                            'tahun_lahir_wali' => $tahun_lahir_wali,
                            'pendidikan_wali' => $pendidikan_wali,
                            'pekerjaan_wali' => $pekerjaan_wali,
                            'penghasilan_wali' => $penghasilan_wali,
                            'nik_wali' => $nik_wali,
                            'rombel' => $rombel,
                            'no_peserta_un' => $no_peserta_un,
                            'no_ijazah' => $no_ijazah,
                            'penerima_kip' => $penerima_kip,
                            'no_kip' => $no_kip,
                            'nama_kip' => $nama_kip,
                            'nomor_kks' => $nomor_kks,
                            'no_akta_lahir' => $no_akta_lahir,
                            'bank' => $bank,
                            'no_rek_bank' => $no_rek_bank,
                            'rek_atas_nama' => $rek_atas_nama,
                            'layak_pip' => $layak_pip,
                            'alasan_layak_pip' => $alasan_pip,
                            'kebutuhan_khusus' => $kebutuhan_khusus,
                            'sekolah_asal' => $sekolah_asal,
                            'anak_ke_berapa' => $anak_ke,
                            'lintang' => $lintang,
                            'bujur' => $bujur,
                            'no_kk' => $no_kk,
                            'berat_badan' => $berat_badan,
                            'tinggi_badan' => $tinggi_badan,
                            'lingkar_kepala' => $lingkar_kepala,
                            'jumlah_saudara' => $jumlah_saudara,
                            'jarak_rumah' => $jarak_rumah
                        );
                    }
                    $data['dataInfo'] = $fetchData;
                    $this->data->setBatchImport($fetchData);
                    $this->data->importDataSiswa();
                } else {
                    $this->session->set_flashdata(
                        'massage',
                        '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                            Failed Upload Data
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('tatausaha/data_siswa_kelas_x');
                }
                $this->session->set_flashdata(
                    'massage',
                    '<div class="alert alert-success alert-dismissable fade show" role="alert">
                            Success Upload Data
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                );
                redirect('tatausaha/data_siswa_kelas_x');
            }
        }
    }

    public function update_data_siswa($nisn)
    {
        // get data from input field
        $data = [
            'nama' => $this->input->post('nama'),
            'nipd' => $this->input->post('nipd'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nisn' => $this->input->post('nisn'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'nik_siswa' => $this->input->post('nik_siswa'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kode_pos' => $this->input->post('kode_pos'),
            'jenis_tinggal' => $this->input->post('jenis_tinggal'),
            'transportasi' => $this->input->post('transportasi'),
            'telepon' => $this->input->post('telepon'),
            'hp' => $this->input->post('hp'),
            'email' => $this->input->post('email'),
            'skhun' => $this->input->post('skhun'),
            'penerima_kps' => $this->input->post('penerima_kps'),
            'no_kps' => $this->input->post('nomor_kps'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'tahun_lahir_ayah' => $this->input->post('tahun_lahir_ayah'),
            'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
            'nik_ayah' => $this->input->post('nik_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tahun_lahir_ibu' => $this->input->post('tahun_lahir_ibu'),
            'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
            'nik_ibu' => $this->input->post('nik_ibu'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tahun_lahir_wali' => $this->input->post('tahun_lahir_wali'),
            'pendidikan_wali' => $this->input->post('pendidikan_wali'),
            'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
            'penghasilan_wali' => $this->input->post('penghasilan_wali'),
            'nik_wali' => $this->input->post('nik_wali'),
            'rombel' => $this->input->post('rombel'),
            'no_peserta_un' => $this->input->post('no_peserta_un'),
            'no_ijazah' => $this->input->post('no_ijazah'),
            'penerima_kip' => $this->input->post('penerima_kip'),
            'no_kip' => $this->input->post('no_kip'),
            'nama_kip' => $this->input->post('nama_kip'),
            'nomor_kks' => $this->input->post('nomor_kks'),
            'no_akta_lahir' => $this->input->post('no_akta_lahir'),
            'bank' => $this->input->post('bank'),
            'no_rek_bank' => $this->input->post('no_rek_bank'),
            'rek_atas_nama' => $this->input->post('rek_atas_nama'),
            'layak_pip' => $this->input->post('layak_pip'),
            'alasan_layak_pip' => $this->input->post('alasan_layak_pip'),
            'kebutuhan_khusus' => $this->input->post('kebutuhan_khusus'),
            'sekolah_asal' => $this->input->post('sekolah_asal'),
            'anak_ke_berapa' => $this->input->post('anak_ke'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'no_kk' => $this->input->post('no_kk'),
            'berat_badan' => $this->input->post('berat_badan'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'lingkar_kepala' => $this->input->post('lingkar_kepala'),
            'jumlah_saudara' => $this->input->post('jumlah_saudara'),
            'jarak_rumah' => $this->input->post('jarak_rumah')
        ];
        $result = $this->db->update('tb_data_siswa', $data, ['nisn' => $nisn]);
        if ($result) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Success update account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_siswa_kelas_x');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Failed update account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_siswa_kelas_x');
        }
    }

    public function delete_data_siswa()
    {
        // Delet data from id user
        $this->db->delete('tb_data_siswa', ['nisn']);
        $this->session->set_flashdata(
            'massage',
            '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                Success deleted account
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('tatausaha/data_siswa_kelas_x');
    }

    /*
    |
    | 
    |
    |
    | Method System
    | Upload Data Guru
    |
    | 
    |
    */
    public function upload()
    {
        // Load form validation library
        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fileURL', 'Upload File', 'callback_checkFileValidation');
        if ($this->form_validation->run() == false) {
            $this->load->view('tatausaha/data_guru', $data);
        } else {
            // If file uploaded
            if (!empty($_FILES['fileURL']['name'])) {
                // get file extension
                $extension = pathinfo($_FILES['fileURL']['name'], PATHINFO_EXTENSION);

                if ($extension == 'csv') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } elseif ($extension == 'xlsx') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }
                // file path
                $spreadsheet = $reader->load($_FILES['fileURL']['tmp_name']);
                $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

                // array Count
                $arrayCount = count($allDataInSheet);
                $flag = 0;
                $createArray = array(
                    'Nama',
                    'Nuptk',
                    'Jenis_Kelamin',
                    'Tempat_Lahir',
                    'Tanggal_Lahir',
                    'Nip',
                    'Status_Kepegawaian',
                    'Jenis_Ptk',
                    'Agama',
                    'Alamat',
                    'RT',
                    'RW',
                    'Nama_Dusun',
                    'Kelurahan',
                    'Kecamatan',
                    'Kode_Pos',
                    'Telepon',
                    'HP',
                    'Email',
                    'Tugas_Tambahan',
                    'Sk_Cpns',
                    'Tanggal_Cpns',
                    'Sk_Pengangkatan',
                    'Tmt_Pengangkatan',
                    'Lembaga_Pengangkatan',
                    'Pangkat_Golongan',
                    'Sumber_Gaji',
                    'Nama_Ibu_Kandung',
                    'Status_Perkawinan',
                    'Nama_Suami_Istri',
                    'Nip_Suami_Istri',
                    'Pekerjaan_Suami',
                    'Tmt_Pns',
                    'Lisensi_Kepsek',
                    'Diklat_Kepengawasan',
                    'Keahlian_Braille',
                    'Bahasa_Isyarat',
                    'Npwp',
                    'Nama_Npwp',
                    'Kwarganegaraan',
                    'Bank',
                    'Nomor_Rekening',
                    'Rek_Atas_Nama',
                    'Nik',
                    'No_KK',
                    'Karpeg',
                    'Karis_Karsu',
                    'Lintang',
                    'Bujur',
                    'Nuks',
                );
                $makeArray = array(
                    'Nama' => 'Nama',
                    'Nuptk' => 'Nuptk',
                    'Jenis_Kelamin' => 'Jenis_Kelamin',
                    'Tempat_Lahir' => 'Tempat_Lahir',
                    'Tanggal_Lahir' => 'Tanggal_Lahir',
                    'Nip' => 'Nip',
                    'Status_Kepegawaian' => 'Status_Kepegawaian',
                    'Jenis_Ptk' => 'Jenis_Ptk',
                    'Agama' => 'Agama',
                    'Alamat' => 'Alamat',
                    'RT' => 'RT',
                    'RW' => 'RW',
                    'Nama_Dusun' => 'Nama_Dusun',
                    'Kelurahan' => 'Kelurahan',
                    'Kecamatan' => 'Kecamatan',
                    'Kode_Pos' => 'Kode_Pos',
                    'Telepon' => 'Telepon',
                    'HP' => 'HP',
                    'Email' => 'Email',
                    'Tugas_Tambahan' => 'Tugas_Tambahan',
                    'Sk_Cpns' => 'Sk_Cpns',
                    'Tanggal_Cpns' => 'Tanggal_Cpns',
                    'Sk_Pengangkatan' => 'Sk_Pengangkatan',
                    'Tmt_Pengangkatan' => 'Tmt_Pengangkatan',
                    'Lembaga_Pengangkatan' => 'Lembaga_Pengangkatan',
                    'Pangkat_Golongan' => 'Pangkat_Golongan',
                    'Sumber_Gaji' => 'Sumber_Gaji',
                    'Nama_Ibu_Kandung' => 'Nama_Ibu_Kandung',
                    'Status_Perkawinan' => 'Status_Perkawinan',
                    'Nama_Suami_Istri' => 'Nama_Suami_Istri',
                    'Nip_Suami_Istri' => 'Nip_Suami_Istri',
                    'Pekerjaan_Suami' => 'Pekerjaan_Suami',
                    'Tmt_Pns' => 'Tmt_Pns',
                    'Lisensi_Kepsek' => 'Lisensi_Kepsek',
                    'Diklat_Kepengawasan' => 'Diklat_Kepengawasan',
                    'Keahlian_Braille' => 'Keahlian_Braille',
                    'Bahasa_Isyarat' => 'Bahasa_Isyarat',
                    'Npwp' => 'Npwp',
                    'Nama_Npwp' => 'Nama_Npwp',
                    'Kwarganegaraan' => 'Kwarganegaraan',
                    'Bank' => 'Bank',
                    'Nomor_Rekening' => 'Nomor_Rekening',
                    'Rek_Atas_Nama' => 'Rek_Atas_Nama',
                    'Nik' => 'Nik',
                    'No_KK' => 'No_KK',
                    'Karpeg' => 'Karpeg',
                    'Karis_Karsu' => 'Karis_Karsu',
                    'Lintang' => 'Lintang',
                    'Bujur' => 'Bujur',
                    'Nuks' => 'Nuks'
                );
                $SheetDataKey = array();
                foreach ($allDataInSheet as $dataInSheet) {
                    foreach ($dataInSheet as $key => $value) {
                        if (in_array(trim($value), $createArray)) {
                            $value = preg_replace('/\s+/', '', $value);
                            $SheetDataKey[trim($value)] = $key;
                        }
                    }
                }
                $dataDiff = array_diff_key($makeArray, $SheetDataKey);
                if (empty($dataDiff)) {
                    $flag = 1;
                }
                // match excel sheet column
                if ($flag == 1) {
                    for ($i = 2; $i <= $arrayCount; $i++) {
                        $addresses = array();
                        $nama = $SheetDataKey['Nama'];
                        $nuptk = $SheetDataKey['Nuptk'];
                        $jenis_kelamin = $SheetDataKey['Jenis_Kelamin'];
                        $tempat_lahir = $SheetDataKey['Tempat_Lahir'];
                        $tanggal_lahir = $SheetDataKey['Tanggal_Lahir'];
                        $nip = $SheetDataKey['Nip'];
                        $status_kepegawaian = $SheetDataKey['Status_Kepegawaian'];
                        $jenis_ptk = $SheetDataKey['Jenis_Ptk'];
                        $agama = $SheetDataKey['Agama'];
                        $alamat = $SheetDataKey['Alamat'];
                        $rt = $SheetDataKey['RT'];
                        $rw = $SheetDataKey['RW'];
                        $nama_dusun = $SheetDataKey['Nama_Dusun'];
                        $kelurahan = $SheetDataKey['Kelurahan'];
                        $kecamatan = $SheetDataKey['Kecamatan'];
                        $kode_pos = $SheetDataKey['Kode_Pos'];
                        $telepon = $SheetDataKey['Telepon'];
                        $hp = $SheetDataKey['HP'];
                        $email = $SheetDataKey['Email'];
                        $tugas_tambahan = $SheetDataKey['Tugas_Tambahan'];
                        $sk_cpns = $SheetDataKey['Sk_Cpns'];
                        $tanggal_cpns = $SheetDataKey['Tanggal_Cpns'];
                        $sk_pengangkatan = $SheetDataKey['Sk_Pengangkatan'];
                        $tmt_pengangkatan = $SheetDataKey['Tmt_Pengangkatan'];
                        $lembaga_pengangkatan = $SheetDataKey['Lembaga_Pengangkatan'];
                        $pangkat_golongan = $SheetDataKey['Pangkat_Golongan'];
                        $sumber_gaji = $SheetDataKey['Sumber_Gaji'];
                        $nama_ibu_kandung = $SheetDataKey['Nama_Ibu_Kandung'];
                        $status_perkawinan = $SheetDataKey['Status_Perkawinan'];
                        $nama_suami_istri = $SheetDataKey['Nama_Suami_Istri'];
                        $nip_suami_istri = $SheetDataKey['Nip_Suami_Istri'];
                        $pekerjaan_suami = $SheetDataKey['Pekerjaan_Suami'];
                        $tmt_pns = $SheetDataKey['Tmt_Pns'];
                        $lisensi_kepsek = $SheetDataKey['Lisensi_Kepsek'];
                        $diklat_kepengawasan = $SheetDataKey['Diklat_Kepengawasan'];
                        $keahlian_braille = $SheetDataKey['Keahlian_Braille'];
                        $bahasa_isyarat = $SheetDataKey['Bahasa_Isyarat'];
                        $npwp = $SheetDataKey['Npwp'];
                        $nama_npwp = $SheetDataKey['Nama_Npwp'];
                        $kwarganegaraan = $SheetDataKey['Kwarganegaraan'];
                        $bank = $SheetDataKey['Bank'];
                        $nomor_rekening = $SheetDataKey['Nomor_Rekening'];
                        $rek_atas_nama = $SheetDataKey['Rek_Atas_Nama'];
                        $nik = $SheetDataKey['Nik'];
                        $no_kk = $SheetDataKey['No_KK'];
                        $karpeg = $SheetDataKey['Karpeg'];
                        $karis_karsu = $SheetDataKey['Karis_Karsu'];
                        $lintang = $SheetDataKey['Lintang'];
                        $bujur = $SheetDataKey['Bujur'];
                        $nuks = $SheetDataKey['Nuks'];

                        $nama = filter_var(trim($allDataInSheet[$i][$nama]), FILTER_SANITIZE_STRING);
                        $nuptk = filter_var(trim($allDataInSheet[$i][$nuptk]), FILTER_SANITIZE_STRING);
                        $jenisKelamin = filter_var(trim($allDataInSheet[$i][$jenis_kelamin]), FILTER_SANITIZE_STRING);
                        $tempatLahir = filter_var(trim($allDataInSheet[$i][$tempat_lahir]), FILTER_SANITIZE_STRING);
                        $tanggalLahir = filter_var(trim($allDataInSheet[$i][$tanggal_lahir]), FILTER_SANITIZE_STRING);
                        $nip = filter_var(trim($allDataInSheet[$i][$nip]), FILTER_SANITIZE_STRING);
                        $statusKepegawaian = filter_var(trim($allDataInSheet[$i][$status_kepegawaian]), FILTER_SANITIZE_STRING);
                        $jenisPtk = filter_var(trim($allDataInSheet[$i][$jenis_ptk]), FILTER_SANITIZE_STRING);
                        $agama = filter_var(trim($allDataInSheet[$i][$agama]), FILTER_SANITIZE_STRING);
                        $alamat = filter_var(trim($allDataInSheet[$i][$alamat]), FILTER_SANITIZE_STRING);
                        $rt = filter_var(trim($allDataInSheet[$i][$rt]), FILTER_SANITIZE_STRING);
                        $rw = filter_var(trim($allDataInSheet[$i][$rw]), FILTER_SANITIZE_STRING);
                        $namaDusun = filter_var(trim($allDataInSheet[$i][$nama_dusun]), FILTER_SANITIZE_STRING);
                        $kelurahan = filter_var(trim($allDataInSheet[$i][$kelurahan]), FILTER_SANITIZE_STRING);
                        $kecamatan = filter_var(trim($allDataInSheet[$i][$kecamatan]), FILTER_SANITIZE_STRING);
                        $kodePos = filter_var(trim($allDataInSheet[$i][$kode_pos]), FILTER_SANITIZE_STRING);
                        $telepon = filter_var(trim($allDataInSheet[$i][$telepon]), FILTER_SANITIZE_STRING);
                        $hp = filter_var(trim($allDataInSheet[$i][$hp]), FILTER_SANITIZE_STRING);
                        $email = filter_var(trim($allDataInSheet[$i][$email]), FILTER_SANITIZE_EMAIL);
                        $tugasTambahan = filter_var(trim($allDataInSheet[$i][$tugas_tambahan]), FILTER_SANITIZE_EMAIL);
                        $skCpns = filter_var(trim($allDataInSheet[$i][$sk_cpns]), FILTER_SANITIZE_STRING);
                        $tanggalCpns = filter_var(trim($allDataInSheet[$i][$tanggal_cpns]), FILTER_SANITIZE_STRING);
                        $skPengangkatan = filter_var(trim($allDataInSheet[$i][$sk_pengangkatan]), FILTER_SANITIZE_STRING);
                        $tmtPengangkatan = filter_var(trim($allDataInSheet[$i][$tmt_pengangkatan]), FILTER_SANITIZE_STRING);
                        $lembagaPengangkatan = filter_var(trim($allDataInSheet[$i][$lembaga_pengangkatan]), FILTER_SANITIZE_STRING);
                        $pangkatGolongan = filter_var(trim($allDataInSheet[$i][$pangkat_golongan]), FILTER_SANITIZE_STRING);
                        $sumberGaji = filter_var(trim($allDataInSheet[$i][$sumber_gaji]), FILTER_SANITIZE_STRING);
                        $namaIbuKandung = filter_var(trim($allDataInSheet[$i][$nama_ibu_kandung]), FILTER_SANITIZE_STRING);
                        $statusPerkawinan = filter_var(trim($allDataInSheet[$i][$status_perkawinan]), FILTER_SANITIZE_STRING);
                        $namaSuamiIstri = filter_var(trim($allDataInSheet[$i][$nama_suami_istri]), FILTER_SANITIZE_STRING);
                        $nipSuamiIstri = filter_var(trim($allDataInSheet[$i][$nip_suami_istri]), FILTER_SANITIZE_STRING);
                        $pekerjaanSuami = filter_var(trim($allDataInSheet[$i][$pekerjaan_suami]), FILTER_SANITIZE_STRING);
                        $tmtPns = filter_var(trim($allDataInSheet[$i][$tmt_pns]), FILTER_SANITIZE_STRING);
                        $lisensiKepsek = filter_var(trim($allDataInSheet[$i][$lisensi_kepsek]), FILTER_SANITIZE_STRING);
                        $diklatKepengawasan = filter_var(trim($allDataInSheet[$i][$diklat_kepengawasan]), FILTER_SANITIZE_STRING);
                        $keahlianBraille = filter_var(trim($allDataInSheet[$i][$keahlian_braille]), FILTER_SANITIZE_STRING);
                        $bahasaIsyarat = filter_var(trim($allDataInSheet[$i][$bahasa_isyarat]), FILTER_SANITIZE_STRING);
                        $npwp = filter_var(trim($allDataInSheet[$i][$npwp]), FILTER_SANITIZE_STRING);
                        $namaNpwp = filter_var(trim($allDataInSheet[$i][$nama_npwp]), FILTER_SANITIZE_STRING);
                        $kwarganegaraan = filter_var(trim($allDataInSheet[$i][$kwarganegaraan]), FILTER_SANITIZE_STRING);
                        $bank = filter_var(trim($allDataInSheet[$i][$bank]), FILTER_SANITIZE_STRING);
                        $nomorRekening = filter_var(trim($allDataInSheet[$i][$nomor_rekening]), FILTER_SANITIZE_STRING);
                        $rekAtasNama = filter_var(trim($allDataInSheet[$i][$rek_atas_nama]), FILTER_SANITIZE_STRING);
                        $nik = filter_var(trim($allDataInSheet[$i][$nik]), FILTER_SANITIZE_STRING);
                        $noKK = filter_var(trim($allDataInSheet[$i][$no_kk]), FILTER_SANITIZE_STRING);
                        $karpeg = filter_var(trim($allDataInSheet[$i][$karpeg]), FILTER_SANITIZE_STRING);
                        $karisKarsu = filter_var(trim($allDataInSheet[$i][$karis_karsu]), FILTER_SANITIZE_STRING);
                        $lintang = filter_var(trim($allDataInSheet[$i][$lintang]), FILTER_SANITIZE_STRING);
                        $bujur = filter_var(trim($allDataInSheet[$i][$bujur]), FILTER_SANITIZE_STRING);
                        $nuks = filter_var(trim($allDataInSheet[$i][$nuks]), FILTER_SANITIZE_STRING);

                        $fetchData[] = array(
                            'nama' => $nama,
                            'nuptk' => $nuptk,
                            'jenis_kelamin' => $jenisKelamin,
                            'tempat_lahir' => $tempatLahir,
                            'tanggal_lahir' => $tanggalLahir,
                            'nip' => $nip,
                            'status_kepegawaian' => $statusKepegawaian,
                            'jenis_ptk' => $jenisPtk,
                            'agama' => $agama,
                            'alamat' => $alamat,
                            'rt' => $rt,
                            'rw' => $rw,
                            'nama_dusun' => $namaDusun,
                            'kelurahan' => $kelurahan,
                            'kecamatan' => $kecamatan,
                            'kode_pos' => $kodePos,
                            'telepon' => $telepon,
                            'hp' => $hp,
                            'email' => $email,
                            'tugas_tambahan' => $tugasTambahan,
                            'sk_cpns' => $skCpns,
                            'tanggal_cpns' => $tanggalCpns,
                            'sk_pengangkatan' => $skPengangkatan,
                            'tmt_pengangkatan' => $tmtPengangkatan,
                            'lembaga_pengangkatan' => $lembagaPengangkatan,
                            'pangkat_golongan' => $pangkatGolongan,
                            'sumber_gaji' => $sumberGaji,
                            'nama_ibu_kandung' => $namaIbuKandung,
                            'status_perkawinan' => $statusPerkawinan,
                            'nama_suami_istri' => $namaSuamiIstri,
                            'nip_suami_istri' => $nipSuamiIstri,
                            'pekerjaan_suami' => $pekerjaanSuami,
                            'tmt_pns' => $tmtPns,
                            'lisensi_kepsek' => $lisensiKepsek,
                            'diklat_kepengawasan' => $diklatKepengawasan,
                            'keahlian_braille' => $keahlianBraille,
                            'bahasa_isyarat' => $bahasaIsyarat,
                            'npwp' => $npwp,
                            'nama_npwp' => $namaNpwp,
                            'kwarganegaraan' => $kwarganegaraan,
                            'bank' => $bank,
                            'nomor_rekening' => $nomorRekening,
                            'rek_atas_nama' => $rekAtasNama,
                            'nik' => $nik,
                            'no_kk' => $noKK,
                            'karpeg' => $karpeg,
                            'karis_Karsu' => $karisKarsu,
                            'lintang' => $lintang,
                            'bujur' => $bujur,
                            'nuks' => $nuks
                        );
                    }
                    $data['dataInfo'] = $fetchData;
                    $this->data->setBatchImport($fetchData);
                    $this->data->importData();
                } else {
                    $this->session->set_flashdata(
                        'massage',
                        '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                            Failed Upload Data
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('tatausaha/data_guru');
                }
                $this->session->set_flashdata(
                    'massage',
                    '<div class="alert alert-success alert-dismissable fade show" role="alert">
                            Success Upload Data
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                );
                redirect('tatausaha/data_guru');
            }
        }
    }

    public function checkFileValidation($string)
    {
        $file_mimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        if (isset($_FILES['fileURL']['name'])) {
            $arr_file = explode('.', $_FILES['fileURL']['name']);
            $extension = end($arr_file);
            if (($extension == 'xlsx' || $extension == 'xls' || $extension == 'csv') && in_array($_FILES['fileURL']['type'], $file_mimes)) {
                return true;
            } else {
                $this->form_validation->set_message('checkFileValidation', 'Please choose correct file.');
                return false;
            }
        } else {
            $this->form_validation->set_message('checkFileValidation', 'Please choose a file.');
            return false;
        }
    }

    public function update($id)
    {
        // get data from input field
        $data = [
            'Nama' => $this->input->post('nama'),
            'Nuptk' => $this->input->post('nuptk'),
            'Jenis_Kelamin' =>  $this->input->post('jenis_kelamin'),
            'Tempat_Lahir' =>  $this->input->post('tempat_lahir'),
            'Tanggal_Lahir' =>  $this->input->post('tanggal_lahir'),
            'Nip' =>  $this->input->post('nip'),
            'Status_Kepegawaian' =>  $this->input->post('status_kepegawaian'),
            'Jenis_Ptk' =>  $this->input->post('jenis_ptk'),
            'Agama' =>  $this->input->post('agama'),
            'Alamat' =>  $this->input->post('alamat'),
            'RT' =>  $this->input->post('rt'),
            'RW' =>  $this->input->post('rw'),
            'Nama_Dusun' =>  $this->input->post('nama_dusun'),
            'Kelurahan' =>  $this->input->post('kelurahan'),
            'Kecamatan' =>  $this->input->post('kecamatan'),
            'Kode_Pos' =>  $this->input->post('kode_pos'),
            'Telepon' =>  $this->input->post('telepon'),
            'HP' =>  $this->input->post('hp'),
            'Email' =>  $this->input->post('email'),
            'Tugas_Tambahan' =>  $this->input->post('tugas_tambahan'),
            'Sk_Cpns' =>  $this->input->post('sk_cpns'),
            'Tanggal_Cpns' =>  $this->input->post('tanggal_cpns'),
            'Sk_Pengangkatan' =>  $this->input->post('sk_pengangkatan'),
            'Tmt_Pengangkatan' =>  $this->input->post('tmt_pengangkatan'),
            'Lembaga_Pengangkatan' =>  $this->input->post('lembaga_pengangkatan'),
            'Pangkat_Golongan' =>  $this->input->post('pangkat_golongan'),
            'Sumber_Gaji' =>  $this->input->post('sumber_gaji'),
            'Nama_Ibu_Kandung' =>  $this->input->post('nama_ibu_kandung'),
            'Status_Perkawinan' =>  $this->input->post('status_perkawinan'),
            'Nama_Suami_Istri' =>  $this->input->post('nama_suami_istri'),
            'Nip_Suami_Istri' =>  $this->input->post('nip_suami_istri'),
            'Pekerjaan_Suami' =>  $this->input->post('pekerjaan_suami'),
            'Tmt_Pns' =>  $this->input->post('tmt_pns'),
            'Lisensi_Kepsek' =>  $this->input->post('lisensi_kepsek'),
            'Diklat_Kepengawasan' =>  $this->input->post('diklat_kepengawasan'),
            'Keahlian_Braille' =>  $this->input->post('keahlian_braille'),
            'Bahasa_Isyarat' =>  $this->input->post('bahasa_isyarat'),
            'Npwp' =>  $this->input->post('npwp'),
            'Nama_Npwp' =>  $this->input->post('nama_npwp'),
            'Kwarganegaraan' =>  $this->input->post('kwarganegaraan'),
            'Bank' =>  $this->input->post('bank'),
            'Nomor_Rekening' =>  $this->input->post('nomor_rekening'),
            'Rek_Atas_Nama' =>  $this->input->post('rek_atas_nama'),
            'Nik' =>  $this->input->post('nik'),
            'No_KK' =>  $this->input->post('no_kk'),
            'Karpeg' =>  $this->input->post('karpeg'),
            'Karis_Karsu' =>  $this->input->post('karis_karsu'),
            'Lintang' =>  $this->input->post('lintang'),
            'Bujur' =>  $this->input->post('bujur'),
            'Nuks' =>  $this->input->post('nuks')
        ];
        $result = $this->db->update('tb_data_siswa', $data, ['id' => $id]);
        if ($result) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Success update account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_guru');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    Failed update account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_guru');
        }
    }

    public function delete_all()
    {
        // Delet data from id user
        $this->db->delete('tb_data_guru', ['id']);
        $this->session->set_flashdata(
            'massage',
            '<div class="alert alert-success alert-dismissable fade show" role="alert">
                Success deleted account
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('tatausaha/data_guru');
    }

    /*
    |--------------------------------------------------------------------------
    | Import data dapodik to data siswa
    |--------------------------------------------------------------------------
    |
    | 
    | 
    | 
    |
    */
    public function getData()
    {
        $nama = $this->input->post('nama', true);
        $data = $this->db->get_where('tb_data_siswa', ['nama' => $nama])->result_array();
        echo json_encode($data);
    }

    public function getDataTagihan()
    {
        $jenis_tagihan = $this->input->post('jenis_tagihan', true);
        $data = $this->db->get_where('tb_tagihan', ['jenis_tagihan' => $jenis_tagihan])->result_array();
        echo json_encode($data);
    }

    public function save_data()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'nisn' => htmlspecialchars($this->input->post('nisn')),
            'nik' => htmlspecialchars($this->input->post('nik')),
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'jurusan' => htmlspecialchars($this->input->post('jurusan')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
            'status' => htmlspecialchars($this->input->post('status'))
        ];

        $insert = $this->db->insert('tb_siswa', $data);
        if ($insert) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                Sukses Import Data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('tatausaha/data_siswa');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                Sukses Import Data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('tatausaha/data_siswa');
        }
    }

    public function update_data($nisn)
    {
        // get data from input field
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'nisn' => htmlspecialchars($this->input->post('nisn')),
            'nik' => htmlspecialchars($this->input->post('nik')),
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'jurusan' => htmlspecialchars($this->input->post('jurusan')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
            'status' => htmlspecialchars($this->input->post('status'))
        ];
        $result = $this->db->update('tb_siswa', $data, ['nisn' => $nisn]);
        if ($result) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Success update data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_siswa');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    Failed update data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('tatausaha/data_siswa');
        }
    }
}
