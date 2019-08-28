<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Descargas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
      
	}

	public function retirar_aporte() 
	{
		$data = [];

		$hoy = date("d-m-y");


        //load the view and saved it into $html variable
        $html =
        "<style>
          h1{
            margin-left: 5rem;
            font-size: 16px;
          }
          h2 {
            font-size: 15px;
            margin-top: -35px;
            margin-left: 8rem;
          }
          h3 {
            font-size: 15px;
             margin-top: -17px;
             margin-left: 4rem;
          }
          .fecha {
            margin-left: -15rem;
          }
           .tabla1 {
            border: solid 1px black;
            margin-left: 13rem;
            border-collapse: collapse;
          }
          .tabla1 td {
             border: solid 1px black;
             height: 19px;
          }
          .tabla1 th {
             border: solid 1px black;
          }
          .tabla2  {
            border: solid 1px black;
            margin-left: -15rem;
            border-collapse: collapse;
          }
          .tabla2 th {
             border: solid 1px black;
             width: 250px;
          }
          .tabla3 {
            border: solid 1px black;
            margin-left: -10rem;
             margin-top: 1rem;
            border-collapse: collapse;
            width: 500px;
            
          }
          .tabla3 td {
             border: solid 1px black;
             height: 20px;
          }
          .tabla3 th {
             border: solid 1px black;
          }
           .tabla4 {
            border: solid 1px black;
            margin-left: 4rem;
            margin-top: -5rem;
          }
          .tabla4 th {
             border: solid 1px black;
             width: 150px;
             height: 150px;
          } 
          .recibi {
            margin-top: 100px;
            float: left;
          }
          p {
            margin-left: -15rem;
          }

          .pie {
            font-size: 11px;
          }
          .pie1 {
            font-size: 11px;
            margin-top: -50px;
            margin-left: 1rem;
          }

          .oscar{
            margin-left: 14rem;
             margin-top: -50px;
          }
          .jose {
            margin-left: 1px;
          }
        </style>".

        "<body>
        <h1>ASOCIACION DE POLICIAS RETIRADOS DEL NORTE DE SANTANDER</h1><br>
        <h2>Personeria juridica No. 500.065 del 23 de septiembre de 1996</p><h2>
        <h3>Nit: 807.001.273-6</h3>

        <div class='fecha'>Cúcuta, ".$hoy."</div>

        <table class='tabla1'>
        <tr>
            <th>CHEQUE</th>
            <th>CONSECUTIVO</th>                  
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>            
        </table>

        <p>Señores:     DIRECTIVOS ASOPORE</p>
        <p>Asunto: Solicitud Aportes</p>
        <p>comedidamente me permito solicitar a los señores directivos de la asociacion de Policias Retirados del Norte de Santander 'ASOPORE', se dignen autorizarme la DEVOLUCION PARCIAL DE LOS APORTES.</p>
        <p>Atentamente, </p>

        <table class='tabla2'>
        <tr>
            <th>".$this->input->post('cedula')."</th>
            <th>".$this->input->post('apellidos')."&nbsp;".$this->input->post('nombres')."</th>                  
        </tr>            
        </table>

        <table class='tabla3'>
        <tr>
            <th>APORTES</th>
            <th>SOLICITADO</th>
            <th>SALDO</th>                  
        </tr>
        <tr>
            <td>".$this->input->post('aportes')."</td>
            <td>".$this->input->post('retiro')."</td>
            <td>".$this->input->post('saldo')."</td>
        </tr>            
        </table>


         <p class='recibi'>RECIBI:____________________________</p>
        <table class='tabla4'>
        <tr>
            <th></th>                
        </tr>
        </table>

        <p class='abel'>ABEL MORALES D. <br>TESORERO</p>

         <p class='oscar'>OSCAR C. RICO VARGAS <br>PRESIDENTE</p>

         <p class='jose'>JOSE G. FLOREZ MENDOZA <br>FISCAL</p>


        <p class='pie'>calle 12 No. 4-47 Oficina 315 Edif. Centro Comercial Internacional. Telf: 5725632 - FAX: 5831994 Cúcuta-Colombia</p>
        <p class='pie1'>e-mail: asopore-1@hotmail.com</p>
        </body>";
        // $html = $this->load->view('v_dpdf',$date,true);
 		
 		     //$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "cipdf_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
 
       // //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}

  public function solicitar_beneficio() 
  {
    $data = [];

    $hoy = date("d-m-y");


        //load the view and saved it into $html variable
        $html =
        "<style>
          h1{
            margin-left: 5rem;
            font-size: 16px;
          }
          h2 {
            font-size: 15px;
            margin-top: -35px;
            margin-left: 8rem;
          }
          h3 {
            font-size: 15px;
             margin-top: -17px;
             margin-left: 4rem;
          }
          .fecha {
            margin-left: -15rem;
          }
           .tabla1 {
            border: solid 1px black;
            margin-left: 13rem;
            border-collapse: collapse;
          }
          .tabla1 td {
             border: solid 1px black;
             height: 19px;
          }
          .tabla1 th {
             border: solid 1px black;
          }
          .tabla2  {
            border: solid 1px black;
            margin-left: -15rem;
            border-collapse: collapse;
          }
          .tabla2 th {
             border: solid 1px black;
             width: 250px;
          }
           .tabla4 {
            border: solid 1px black;
            margin-left: 4rem;
            margin-top: -5rem;
          }
          .tabla4 th {
             border: solid 1px black;
             width: 150px;
             height: 150px;
          } 
          .recibi {
            margin-top: 100px;
            float: left;
          }
          p {
            margin-left: -15rem;
          }

          .pie {
            font-size: 11px;
          }
          .pie1 {
            font-size: 11px;
            margin-top: -50px;
            margin-left: 1rem;
          }

          .oscar{
            margin-left: 14rem;
             margin-top: -50px;
          }
          .jose {
            margin-left: 1px;
          }
        </style>".

        "<body>
        <h1>ASOCIACION DE POLICIAS RETIRADOS DEL NORTE DE SANTANDER</h1><br>
        <h2>Personeria juridica No. 500.065 del 23 de septiembre de 1996</p><h2>
        <h3>Nit: 807.001.273-6</h3>

        <div class='fecha'>Cúcuta, ".$hoy."</div>

        <table class='tabla1'>
        <tr>
            <th>CONSECUTIVO</th>                  
        </tr>
        <tr>
            <td></td>
        </tr>            
        </table>

        <p>Señores:     DIRECTIVOS ASOPORE</p>
        <p>Asunto: Solicitud Aportes</p>
        <p>comedidamente me permito solicitar a los señores directivos de la asociacion de Policias Retirados del Norte de Santander 'ASOPORE', se dignen autorizarme el prestamo de un aparato Ortopedico: ".$this->input->post('beneficio')."</p>
        <p>Atentamente, </p>

        <table class='tabla2'>
        <tr>
            <th>".$this->input->post('cedula')."</th>
            <th>".$this->input->post('apellidos')."&nbsp;".$this->input->post('nombres')."</th>                  
        </tr>            
        </table>


         <p class='recibi'>RECIBI:____________________________</p>
        <table class='tabla4'>
        <tr>
            <th></th>                
        </tr>
        </table>

        <p class='abel'>ABEL MORALES D. <br>TESORERO</p>

         <p class='oscar'>OSCAR C. RICO VARGAS <br>PRESIDENTE</p>

         <p class='jose'>JOSE G. FLOREZ MENDOZA <br>FISCAL</p>


        <p class='pie'>calle 12 No. 4-47 Oficina 315 Edif. Centro Comercial Internacional. Telf: 5725632 - FAX: 5831994 Cúcuta-Colombia</p>
        <p class='pie1'>e-mail: asopore-1@hotmail.com</p>
        </body>";
        // $html = $this->load->view('v_dpdf',$date,true);
    
         //$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "cipdf_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
 
       // //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
  }

  public function imprimir_afiliacion() 
{
     $data = [];

    $hoy = date("d-m-y");


        //load the view and saved it into $html variable
        $html =
        "<style>
         h1{
            margin-left: 5rem;
            font-size: 16px;
          }
          h2 {
            font-size: 15px;
            margin-top: -35px;
            margin-left: 8rem;
          }
          h3 {
            font-size: 15px;
             margin-top: -17px;
             margin-left: 4rem;
          }
          .pie {
            font-size: 11px;
          }
          .pie1 {
            font-size: 11px;
            margin-top: -50px;
            margin-left: 1rem;
          }
        </style>".

        "<body>
        <h1>ASOCIACION DE POLICIAS RETIRADOS DEL NORTE DE SANTANDER</h1><br>
        <h2>Personeria juridica No. 500.065 del 23 de septiembre de 1996</p><h2>
        <h3>Nit: 807.001.273-6</h3>

        <p>FORMATO UNICO DE AFILIACION ASOPORE</p>

    <p>DATOS PERSONALES</p>

    <div>
      Apellidos:".$this->input->post('apellidos')." Nombres: 
    </div>

    <div>
      <p>Cedula: </p> 
      <p>Lugar expedicion: </p>
      <p>Fecha expedicion: </p>
    </div>

    <div>
      <p>Fecha nacimeinto: </p> 
      <p>Estado civil: </p>
    </div>

    <div>
      <p>Direccion: </p> 
      <p>Telefono: </p>
      <p>Celular: </p>
    </div>

     <div>
      <p>Firma autorizacion afiliado </p> 
      <p>Cedula numero </p>
      <p>indice derecho </p>
    </div>

    <p class='pie'>calle 12 No. 4-47 Oficina 315 Edif. Centro Comercial Internacional. Telf: 5725632 - FAX: 5831994 Cúcuta-Colombia</p>
        <p class='pie1'>e-mail: asopore-1@hotmail.com</p>
        
        </body>";
        // $html = $this->load->view('v_dpdf',$date,true);
    
         //$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "afiliacion_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
 
       // //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
}

public function solicitar_credito() 
  {
    $data = [];

    $hoy = date("d-m-y");


        //load the view and saved it into $html variable
        $html =
        "<style>
          h1{
            margin-left: 5rem;
            font-size: 16px;
          }
          h2 {
            font-size: 15px;
            margin-top: -35px;
            margin-left: 8rem;
          }
          h3 {
            font-size: 15px;
             margin-top: -17px;
             margin-left: 4rem;
          }
          .fecha {
            margin-left: -15rem;
          }
          .tabla0 {
            border: solid 1px black;
            border-collapse: collapse;
            margin-left: -15rem;
          }
          .tabla0 td {
             border: solid 1px black;
             height: 19px;
          }
           .tabla1 {
            border: solid 1px black;
            margin-left: 13rem;
            border-collapse: collapse;
          }
          .tabla1 td {
             border: solid 1px black;
             height: 19px;
          }
          .tabla1 th {
             border: solid 1px black;
          }
          .tabla2  {
            border: solid 1px black;
            margin-left: -15rem;
            border-collapse: collapse;
          }
          .tabla2 th {
             border: solid 1px black;
             width: 250px;
          }
           .tabla4 {
            border: solid 1px black;
            margin-left: 4rem;
            margin-top: -10rem;
          }
          .tabla4 th {
             border: solid 1px black;
             width: 120px;
             height: 120px;
          } 
          .recibi {
            margin-top: 100px;
            float: left;
          }
          p {
            margin-left: -15rem;
          }

          .pie {
            font-size: 11px;
          }
          .pie1 {
            font-size: 11px;
            margin-top: -50px;
            margin-left: 1rem;
          }

          .oscar{
            margin-left: 14rem;
             margin-top: -50px;
          }
          .jose {
            margin-left: 1px;
          }
          .parra{
            font-size: 11px;
          }
          p{
            font-size: 11px;
          }
        </style>".

        "<body>
        <h1>ASOCIACION DE POLICIAS RETIRADOS DEL NORTE DE SANTANDER</h1><br>
        <h2>Personeria juridica No. 500.065 del 23 de septiembre de 1996</p><h2>
        <h3>Nit: 807.001.273-6</h3>

        <table class='tabla0'>
        <tr>
            <th>MONTO TOTAL</th>                  
        </tr>
        <tr>
            <td>".$this->input->post('monto')."</p></td>
        </tr>            
        </table>

        <table class='tabla1'>
        <tr>
            <th>CONSECUTIVO</th>                  
        </tr>
        <tr>
            <td></td>
        </tr>            
        </table>

        <p>PAGARE: A FAVOR DE LA ASOCIACION DE POLICIAS RETIRADOS DE NORTE DE SNATANDER</p>
        <p>San jose de Cúcuta, ".$hoy." </p>
        <p class='parra'>YO ".$this->input->post('nombres')." ".$this->input->post('apellidos')." C.C ".$this->input->post('cedula')." de Cúcuta en mi condición de afiliado (a) de ASOPORE y con asignación de retiro CASÙR- TEGEN o pensionado de la Policía Nacional , autorizo a la asociación de Policías Retirados de Norte de Santander para que por medio del centro del sistema de la respectiva Caja, efectúe los reporte de descuento correspondientes a la presente obligación , a fin de que el señor Tesorero de la caja de sueldo de retiro o el tesorero general de la policía Nacional por intermedio de sus plataformas, se sirva descontar de la asignación mensual que devengo y cobro, la suma total ".$this->input->post('monto').", en DIEZ (10) CUOTAS POR VALOR DE LIBRANZA .Ha; partir del mes  de Junio del 2019 dicho dinero será girado a la Asociación de Policías Retirados de Norte de Santander por concepto de un crédito que me fue otorgado. Este documento es auténtico y firmado sin ninguna coacción y dejo constancia que en caso de muerte del suscrito , Autorizo a la Asociación para que de mis aportes devolutivos o del Auxilio Funerario se me descuente el saldo existente y/o de la sustentación de mi asignación de retiro quien se presente a reclamarla , asumirá la obligación hasta su terminación .En caso de que no se produzca el descuento respectivo por nómina, debe acercarse a la Tesoseria de la Asociación para efectuar el pago de la cuota referida.
De igual manera, autorizo mi reporte a la base de datos de Pro Crédito para su reporte crediticio a central de riesgos 
</p>
        <p>EL DEUDOR</p>

         <p class='recibi'>FIRMA:____________________________</p>
        <table class='tabla4'>
        <tr>
            <th></th>                
        </tr>
        </table>

        <p>CANCELA, (".$this->input->post('cuotas').") CUOTAS, POR VALOR DE LA LIBRANZA Interes Al 1% MENSUAL</p>
        <p class='recibi'>RECIBI:____________________________</p>

        <p class='abel'>ABEL MORALES D. <br>TESORERO</p>

         <p class='oscar'>OSCAR C. RICO VARGAS <br>PRESIDENTE</p>

         <p class='jose'>JOSE G. FLOREZ MENDOZA <br>FISCAL</p>


        <p class='pie'>calle 12 No. 4-47 Oficina 315 Edif. Centro Comercial Internacional. Telf: 5725632 - FAX: 5831994 Cúcuta-Colombia</p>
        <p class='pie1'>e-mail: asopore-1@hotmail.com</p>
        </body>";
        // $html = $this->load->view('v_dpdf',$date,true);
    
         //$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "cipdf_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
 
       // //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
  }



}