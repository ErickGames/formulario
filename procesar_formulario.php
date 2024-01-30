<?php
// Genera y descarga el PDF
session_start();

require('fpdf/fpdf.php');
require('fpdf/fpdf.php');
require('phpmailer/PHPMailerAutoload.php'); // Asegúrate de descargar PHPMailer y ajustar la ruta


class PDF extends FPDF
{
    function header()
    {
        // Agregar el logo al inicio del PDF (cordenadas y tamaño)
        $this->Image('img/logo-01.png', 10, 0, 40);

        $this->SetFont('Arial', 'B', 13);
        $this->Cell(0, 10, utf8_decode('Respuestas del Usuario'), 0, 1, 'C');
    }

    function chapterTitle($num, $label)
    {
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(0, 10, utf8_decode('Sección ') . $num . ': ' . $label, 0, 1, 'L');
    }

    function chapterSub($label)
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, $label, 0, 1, 'L');
    }

    function chapterBody($body)
    {
        $this->SetFont('Arial', '', 11);
        $this->MultiCell(0, 5, $body);
    }
}

$pdf = new PDF();
$pdf->SetMargins(25, 25, 25);
$pdf->AddPage();



$hayFortalezas1 = false;
$hayDebilidades1 = false;
$hayFortalezas2 = false;
$hayDebilidades2 = false;
$hayFortalezas3 = false;
$hayDebilidades3 = false;
$hayFortalezas4 = false;
$hayDebilidades4 = false;
$hayFortalezas5 = false;
$hayDebilidades5 = false;
$hayFortalezas6 = false;
$hayDebilidades6 = false;
$hayFortalezas7 = false;
$hayDebilidades7 = false;
$hayFortalezas8 = false;
$hayDebilidades8 = false;
$hayFortalezas9 = false;
$hayDebilidades9 = false;
$hayFortalezas10 = false;
$hayDebilidades10 = false;
////////////////
// Sección 1 //
//////////////

$pdf->chapterTitle(1, 'Ventas y mercadotecnia');
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas1 = '';
$bodyContentFortalezas1 .= utf8_decode('- Gestión de venta: Sólida identificación, contacto, seguimiento para concretar cita.' . "\n");

if ($_SESSION['respuesta_s1p1'] == '4' || $_SESSION['respuesta_s1p1'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Gestión de venta: Sólida identificación, contacto, seguimiento para concretar cita.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p2'] == '4' || $_SESSION['respuesta_s1p2'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Actividad promocional: Se captura venta incremental a partir de aprovechar ferias o eventos importantes durante el año.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p3'] == '4' || $_SESSION['respuesta_s1p3'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Publicidad en medios tradicionales: Se cuenta con una comunicación en medios tradicionales que permiten mantener vigencia con ciertos segmentos de población.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p4'] == '4' || $_SESSION['respuesta_s1p4'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Configuración y venta de paquetes: Se captura una venta mayor por paciente.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p5'] == '4' || $_SESSION['respuesta_s1p5'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Plan de Lealtad e incentivos con pacientes frecuentes: Se cuenta con herramientas formales para el fortalecimiento de la lealtad de cliente frecuentes.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p6'] == '4' || $_SESSION['respuesta_s1p6'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Redes sociales: Se mantiene en la conversación.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p7'] == '4' || $_SESSION['respuesta_s1p7'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Poder de marca: El mercado tiene presente al doctor y a su clínica y en momentos de necesidad lo recuerdan para agendar cita.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p8'] == '4' || $_SESSION['respuesta_s1p8'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Página WEB del negocio: Se cuenta con elementos de institucionalidad que transmiten confianza y formalidad.' . "\n");
    $hayFortalezas1 = true;
}
if ($_SESSION['respuesta_s1p9'] == '4' || $_SESSION['respuesta_s1p9'] == '5') {
    $bodyContentFortalezas1 .= utf8_decode('- Soporte para comunicación y mercadotecnia: Se desarrolla de manera profesional la comunicación y mercadotecnia alrededor de la marca.' . "\n");
    $hayFortalezas1 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas1) {
    $bodyContentFortalezas1 = utf8_decode('- No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas1);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades1 = '';

if ($_SESSION['respuesta_s1p1'] == '1' || $_SESSION['respuesta_s1p1'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Gestión de venta: Perdidas permanentes de clientes potenciales por falta de seguimiento.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p2'] == '1' || $_SESSION['respuesta_s1p2'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Actividad promocional: No se aprovechan fechas o eventos importantes para atraer a mas clientes.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p3'] == '1' || $_SESSION['respuesta_s1p3'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Configuración y venta de paquetes: No se impulsa un ticket de venta mayor (Que cada paciente adquiera mas productos o servicios).' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p4'] == '1' || $_SESSION['respuesta_s1p4'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Redes sociales: No se esta presente en la conversación de redes sociales perdiendo oportunidad de posicionamiento. ' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p5'] == '1' || $_SESSION['respuesta_s1p5'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Poder de marca: No existe reconocimiento de marca y el mercado tienen presente al doctor ni a su clínica.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p6'] == '1' || $_SESSION['respuesta_s1p6'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Página WEB del negocio: No se tiene la institucionalidad suficiente para impulsar la institucionalidad y marca.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p7'] == '1' || $_SESSION['respuesta_s1p7'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Publicidad en medios tradicionales: No se llega a los posibles clientes por diferentes medios tradicionales de comunicación.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p8'] == '1' || $_SESSION['respuesta_s1p8'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Plan de Lealtad e incentivos con pacientes frecuentes: No se cuenta con una herramienta formal para la generación de lealtad de clientes frecuentes.' . "\n");
    $hayDebilidades1 = true;
}
if ($_SESSION['respuesta_s1p9'] == '1' || $_SESSION['respuesta_s1p9'] == '2') {
    $bodyContentDebilidades1 .= utf8_decode('- Soporte para comunicación y mercadotecnia: No se desarrolla de manera profesional la comunicación y mercadotecnia alrededor de la marca.' . "\n");
    $hayDebilidades1 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades1 == false) {
    $bodyContentDebilidades1 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades1);
////////////////
// Sección 2 //
//////////////
$pdf->chapterTitle(2, utf8_decode('Recepción / Citas / Expedientes'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas2 = '';

if ($_SESSION['respuesta_s2p1'] == '4' || $_SESSION['respuesta_s2p1'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Sistema para admón. de citas: Se mantiene orden en la agenda, y se le da seguimiento a pacientes para que atiendan o ajusten su cita.' . "\n");
    $hayFortalezas2 = true;
}
if ($_SESSION['respuesta_s2p2'] == '4' || $_SESSION['respuesta_s2p2'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Area de recepción: Recepción cómoda y amplia que mejora la experiencia del paciente.' . "\n");
    $hayFortalezas2 = true;
}
if ($_SESSION['respuesta_s2p3'] == '4' || $_SESSION['respuesta_s2p3'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Persona dedicada a recepción: Atención a cada paciente que asiste a la clínica.' . "\n");
    $hayFortalezas2 = true;
}
if ($_SESSION['respuesta_s2p4'] == '4' || $_SESSION['respuesta_s2p4'] == '5') {
    $bodyContentFortalezas2 .= utf8_decode('- Administración de expedientes: Mejora la experiencia del paciente mediante el registro electrónico de su expediente.' . "\n");
    $hayFortalezas2 = true;
}
// Verifica si hay alguna fortaleza
if ($hayFortalezas2 == false) {
    $bodyContentFortalezas2 = utf8_decode('No hay fortalezas relevantes' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas1);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades2 = '';

if ($_SESSION['respuesta_s2p1'] == '1' || $_SESSION['respuesta_s2p1'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Sistema para admón. de citas: Riesgo de perder visibilidad de citas, empalmar horarios y no aprovechar horarios disponibles.' . "\n");
    $hayDebilidades2 = true;
}
if ($_SESSION['respuesta_s2p2'] == '1' || $_SESSION['respuesta_s2p2'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Area de recepción: Perdida de pacientes que no encuentran un espacio cómodo a su llegada.' . "\n");
    $hayDebilidades2 = true;
}
if ($_SESSION['respuesta_s2p3'] == '1' || $_SESSION['respuesta_s2p3'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Persona dedicada a recepción: Perdida de pacientes que no son bien recibidos y atendidos.' . "\n");
    $hayDebilidades2 = true;
}
if ($_SESSION['respuesta_s2p4'] == '1' || $_SESSION['respuesta_s2p4'] == '2') {
    $bodyContentDebilidades2 .= utf8_decode('- Administración de expedientes: Perdida de historial de los pacientes y retrabajo en su registro y seguimiento.' . "\n");
    $hayDebilidades2 = true;
}
// Verifica si hay alguna debilidad
if (!$hayDebilidades2) {
    $bodyContentDebilidades2 = utf8_decode('No hay debilidades relevantes' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades2);
////////////////
// Sección 3 //
//////////////
$pdf->chapterTitle(3, utf8_decode('Administración'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas3 = '';

if ($_SESSION['respuesta_s3p1'] == '4' || $_SESSION['respuesta_s3p1'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Registro contable: Alto control y visibilidad de ventas, costos y gastos.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p2'] == '4' || $_SESSION['respuesta_s3p2'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Estados financieros: Entendimiento de rentabilidad del negocio.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p3'] == '4' || $_SESSION['respuesta_s3p3'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Generación de utilidades: Claridad de utilidades y su uso para reinversión .' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p4'] == '4' || $_SESSION['respuesta_s3p4'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Registro de transacciones por evento y operación: Todos los gastos que aplican se deducen y se obtiene beneficio en el pago de impuestos.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p5'] == '4' || $_SESSION['respuesta_s3p5'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Clientes y cuentas por cobrar: Control y seguimiento a cuentas pendientes de cobro.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p6'] == '4' || $_SESSION['respuesta_s3p6'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Proveedores y cuentas por cobrar: Visibilidad, control y cumplimiento de compromisos de pago por proveedor.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p7'] == '4' || $_SESSION['respuesta_s3p7'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Reportes de desempeño y seguimiento: Visibilidad de los indicadores claves del negocio.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p8'] == '4' || $_SESSION['respuesta_s3p8'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Soporte de un contador interno/externo: Se cuenta con ayuda profesional contable que da certeza al cumplimiento fiscal y disminuye riesgos innecesarios.' . "\n");
    $hayFortalezas3 = true;
}
if ($_SESSION['respuesta_s3p9'] == '4' || $_SESSION['respuesta_s3p9'] == '5') {
    $bodyContentFortalezas3 .= utf8_decode('- Negociación y alianzas con proveedores: Las alianzas con proveedores permiten aprovechar mejores precios, descuentos y servicio.' . "\n");
    $hayFortalezas3 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas3) {
    $bodyContentFortalezas3 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas3);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades3 = '';

if ($_SESSION['respuesta_s3p1'] == '1' || $_SESSION['respuesta_s3p1'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Registro contable: Falta de control de ventas, costos y gastos.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p2'] == '1' || $_SESSION['respuesta_s3p2'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Estados financieros: Falta de entendimiento de rentabilidad.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p3'] == '1' || $_SESSION['respuesta_s3p3'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Generación de utilidades: Sin claridad de las utilidades para reinvertir.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p4'] == '1' || $_SESSION['respuesta_s3p4'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Registro de transacciones por evento y operación: No se dispone del registro de gastos que pueden deducirse y pagar menores impuestos.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p5'] == '1' || $_SESSION['respuesta_s3p5'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Clientes y cuentas por cobrar: Posible perdida de ingresos por no tener control de saldos por cobrar a clientes.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p6'] == '1' || $_SESSION['respuesta_s3p6'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Proveedores y cuentas por cobrar: Falta de control sobre compromisos con proveedores que puede ocasionar la suspensión de productos y servicios por falta de pago.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p7'] == '1' || $_SESSION['respuesta_s3p7'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Reportes de desempeño y seguimiento: Falta de control de los indicadores claves del negocio.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p8'] == '1' || $_SESSION['respuesta_s3p8'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Soporte de un contador interno/externo: No se cuenta con apoyo profesional permanente en la contabilidad y se corre riesgo de caer en incumplimientos de la autoridad.' . "\n");
    $hayDebilidades3 = true;
}
if ($_SESSION['respuesta_s3p9'] == '1' || $_SESSION['respuesta_s3p9'] == '2') {
    $bodyContentDebilidades3 .= utf8_decode('- Negociación y alianzas con proveedores: Al no existir alianzas fuertes con proveedores se deja de aprovechar el acceso a descuentos y mejores precios o servicios.' . "\n");
    $hayDebilidades3 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades3 == false) {
    $bodyContentDebilidades3 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades3);
////////////////
// Sección 4 //
//////////////
$pdf->chapterTitle(4, utf8_decode('Planeación y Estrategia'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas4 = '';

if ($_SESSION['respuesta_s4p1'] == '4' || $_SESSION['respuesta_s4p1'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Visión y Estrategia de la empresa: Cada recurso, inversión y nuevos servicios pueden estar dirigidos a llegar a su visión en menor tiempo.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p2'] == '4' || $_SESSION['respuesta_s4p2'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Conocimiento de la competencia: Al conocer a su competencia se pueden adecuar mejor sus precios y estrategias para atraer mas clientes.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p3'] == '4' || $_SESSION['respuesta_s4p3'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Planeación anual / presupuestos: Con planeación y estrategia se puede lograr un mejor uso de los recursos de la empresa.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p4'] == '4' || $_SESSION['respuesta_s4p4'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Competitividad en el mercado: Con una solidez competitiva se pueden atraer y ganar mayor cantidad de clientes .' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p5'] == '4' || $_SESSION['respuesta_s4p5'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Optimización de servicios (Generación y eliminación): Se cuenta con servicios vigentes y atractivos  lo que hace mas eficiente la labor de venta y la atracción de pacientes.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p6'] == '4' || $_SESSION['respuesta_s4p6'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Costeo y rentabilidad de servicios: Buen conocimiento de los costos y rentabilidad de cada servicio, lo que permite definir estrategias especificas para mejorar la utilidad de la empresa.' . "\n");
    $hayFortalezas4 = true;
}
if ($_SESSION['respuesta_s4p7'] == '4' || $_SESSION['respuesta_s4p7'] == '5') {
    $bodyContentFortalezas4 .= utf8_decode('- Fijación de precios: Precios adecuados en función a una estrategia integral lo que permite generar venas y al mismo tiempo generar utilidad.' . "\n");
    $hayFortalezas4 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas4) {
    $bodyContentFortalezas4 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas4);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades4 = '';

if ($_SESSION['respuesta_s4p1'] == '1' || $_SESSION['respuesta_s4p1'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Visión y Estrategia de la empresa: No se tiene claro a donde se dirige como empresa, puede perder mucho tiempo, dinero y esfuerzo sin un rumbo especifico.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p2'] == '1' || $_SESSION['respuesta_s4p2'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Conocimiento de la competencia: Al desconocer a su competencia se pueden cometer errores en la fijación de precios en productos y servicios.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p3'] == '1' || $_SESSION['respuesta_s4p3'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Planeación anual / presupuestos: Sin planeación y presupuesto sólido se puede estar invirtiendo y gastando dinero de panera poco efectiva.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p4'] == '1' || $_SESSION['respuesta_s4p4'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Competitividad en el mercado: Sin una estrategia competitiva en el mercado se pierden clientes potenciales.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p5'] == '1' || $_SESSION['respuesta_s4p5'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Optimización de servicios (Generación y eliminación): Se puede contar con servicios que ya no hacen sentido o bien desaprovechar la oportunidad de lanzar nuevos.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p6'] == '1' || $_SESSION['respuesta_s4p6'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Costeo y rentabilidad de servicios: Desconocimiento del costo que implica cada consulta o servicio, y por lo tanto desconocimiento de la utilidad de cada uno de ellos.' . "\n");
    $hayDebilidades4 = true;
}
if ($_SESSION['respuesta_s4p7'] == '1' || $_SESSION['respuesta_s4p7'] == '2') {
    $bodyContentDebilidades4 .= utf8_decode('- Fijación de precios: Riesgo de tener servicios que no se pagan porque los costos pueden superar el precio o servicios muy caros que no generan ventas porque las personas no los solicitan.' . "\n");
    $hayDebilidades4 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades4 == false) {
    $bodyContentDebilidades4 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades4);
////////////////
// Sección 5 //
//////////////
$pdf->chapterTitle(5, utf8_decode('Farmacia'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas5 = '';

if ($_SESSION['respuesta_s5p1'] == '4' || $_SESSION['respuesta_s5p1'] == '5') {
    $bodyContentFortalezas5 .= utf8_decode('- Cuento con farmacia: Con la venta de medicamentos se logra un ingreso mayor además de un servicio mas integral al paciente.' . "\n");
    $hayFortalezas5 = true;
}
if ($_SESSION['respuesta_s5p2'] == '4' || $_SESSION['respuesta_s5p2'] == '5') {
    $bodyContentFortalezas5 .= utf8_decode('- Administración de Farmacia: Lo que se tiene de farmacia esta bien administrado.' . "\n");
    $hayFortalezas5 = true;
}
if ($_SESSION['respuesta_s5p3'] == '4' || $_SESSION['respuesta_s5p3'] == '5') {
    $bodyContentFortalezas5 .= utf8_decode('- Manejo inventarios y faltantes: El control sobre inventarios de productos contribuye al rendimiento de los productos e insumos.' . "\n");
    $hayFortalezas5 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas5) {
    $bodyContentFortalezas5 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas5);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades5 = '';

if ($_SESSION['respuesta_s5p1'] == '1' || $_SESSION['respuesta_s5p1'] == '2') {
    $bodyContentDebilidades5 .= utf8_decode('- Cuento con farmacia: Sin farmacia o la capacidad de venta de medicamento se pierde una importante oportunidad de ingresos adicionales.' . "\n");
    $hayDebilidades5 = true;
}
if ($_SESSION['respuesta_s5p2'] == '1' || $_SESSION['respuesta_s5p2'] == '2') {
    $bodyContentDebilidades5 .= utf8_decode('- Administración de Farmacia: No se tiene un control sobre actividades de farmacia.' . "\n");
    $hayDebilidades5 = true;
}
if ($_SESSION['respuesta_s5p3'] == '1' || $_SESSION['respuesta_s5p3'] == '2') {
    $bodyContentDebilidades5 .= utf8_decode('- Manejo inventarios y faltantes: Se corre alto riesgo de faltante y mermas, generando perdidas para la empresa y no optimizando la inversión.' . "\n");
    $hayDebilidades5 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades5 == false) {
    $bodyContentDebilidades5 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades5);
////////////////
// Sección 6 //
//////////////
$pdf->chapterTitle(6, utf8_decode('Fiscal y Legal'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas6 = '';

if ($_SESSION['respuesta_s6p1'] == '4' || $_SESSION['respuesta_s6p1'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Constitución de empresas: La constitución formal de la empresa permite generar beneficios fiscales y de otros tipos.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p2'] == '4' || $_SESSION['respuesta_s6p2'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Planeación fiscal: La planeación fisca permite accesar beneficios contables.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p3'] == '4' || $_SESSION['respuesta_s6p3'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Permisos COFEPRIS: El estar en orden con permisos de Cofepris disminuye riesgos innecesarios.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p4'] == '4' || $_SESSION['respuesta_s6p4'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Certificaciones y otros permisos: Contar con certificaciones y permisos varios da formalidad y certeza al negocio.' . "\n");
    $hayFortalezas6 = true;
}
if ($_SESSION['respuesta_s6p5'] == '4' || $_SESSION['respuesta_s6p5'] == '5') {
    $bodyContentFortalezas6 .= utf8_decode('- Sistema de facturación: El contar con un sistema de facturación permite  un mejor uso del tiempo y la integración de información con otras herramientas de la clínica.' . "\n");
    $hayFortalezas6 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas6) {
    $bodyContentFortalezas6 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas6);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades6 = '';

if ($_SESSION['respuesta_s6p1'] == '1' || $_SESSION['respuesta_s6p1'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Constitución de empresas: La falta de una constitución formal de empresa puede presentar oportunidades en la recuperación de impuestos y otros beneficios.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p2'] == '1' || $_SESSION['respuesta_s6p2'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Planeación fiscal: Al no tener planeación fiscal se pierde la oportunidad de obtener ciertos beneficios contables.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p3'] == '1' || $_SESSION['respuesta_s6p3'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Permisos COFEPRIS: El no contar con permisos de Cofepris genera un riesgo de clausura.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p4'] == '1' || $_SESSION['respuesta_s6p4'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Certificaciones y otros permisos: La falta de certificaciones y permisos varios genera riesgo de clausura.' . "\n");
    $hayDebilidades6 = true;
}
if ($_SESSION['respuesta_s6p5'] == '1' || $_SESSION['respuesta_s6p5'] == '2') {
    $bodyContentDebilidades6 .= utf8_decode('- Sistema de facturación: El no tener sistema de facturación puede generar perdida de tiempo y falta de un buen servicio a clientes que necesitan factura.' . "\n");
    $hayDebilidades6 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades6 == false) {
    $bodyContentDebilidades6 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades6);
////////////////
// Sección 7 //
//////////////
$pdf->chapterTitle(7, utf8_decode('Activos'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas7 = '';

if ($_SESSION['respuesta_s7p1'] == '4' || $_SESSION['respuesta_s7p1'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Inventarios de activos: El control de activos permite el cuidado de los bienes materiales del negocio.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p2'] == '4' || $_SESSION['respuesta_s7p2'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Nivel de inversión en equipos: Contar con equipo de primer nivel permite generar servicios de mejor calidad a los diferentes usuarios.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p3'] == '4' || $_SESSION['respuesta_s7p3'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Registro de depreciación de activos: Contar con un registro de depreciación permite una base gravable menos para la disminución de impuestos.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p4'] == '4' || $_SESSION['respuesta_s7p4'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Cotizaciones, evaluación de proveedores y opciones de financiamiento: El contar con varias cotizaciones y evaluaciones financieras en la compra de equipo o en accesos a crédito conlleva a menores costos de financiamiento.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p5'] == '4' || $_SESSION['respuesta_s7p5'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Nivel de apalancamiento con proveedores: El contar con un modelo de financiamiento y apalancamiento con bancos y proveedores permite un mejor retorno sobre el capital propio.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p6'] == '4' || $_SESSION['respuesta_s7p6'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Costeo de equipos en los dierentes servicios: El contar con un costeo claro de los equipos en cada servicio puede llevar a una estrategia de precios optimizada, tanto para llegar a una utilidad atractiva como para fijar un precio conveniente que promueva la venta.' . "\n");
    $hayFortalezas7 = true;
}
if ($_SESSION['respuesta_s7p7'] == '4' || $_SESSION['respuesta_s7p7'] == '5') {
    $bodyContentFortalezas7 .= utf8_decode('- Nivel de utilización de los equipos: El alto % de uso de los equipos permite una rápida recuperación de la inversión.' . "\n");
    $hayFortalezas7 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas7) {
    $bodyContentFortalezas7 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas7);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades7 = '';

if ($_SESSION['respuesta_s7p1'] == '1' || $_SESSION['respuesta_s7p1'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Inventarios de activos: La falta de formalidad en el control de activos genera riesgo para perdidas y mermas innecesarias.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p2'] == '1' || $_SESSION['respuesta_s7p2'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Nivel de inversión en equipos: La falta de equipo puede generar poca diferenciación en los servicios que presta el negocio.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p3'] == '1' || $_SESSION['respuesta_s7p3'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Registro de depreciación de activos: La falta de registro de depreciación disminuye la posibilidad de pagar menores impuestos y perder visibilidad de lo que cuesta el deterioro de los equipos.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p4'] == '1' || $_SESSION['respuesta_s7p4'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Cotizaciones, evaluación de proveedores y opciones de financiamiento: El no contar con varias cotizaciones y evaluaciones financieras en la compra de equipo o en accesos a crédito conlleva a mayores costos de financiamiento.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p5'] == '1' || $_SESSION['respuesta_s7p5'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Nivel de apalancamiento con proveedores: El no contar con una estrategia de apalancamiento y de seguimiento a proveedores no  optimiza el uso de los recursos económicos disponible.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p6'] == '1' || $_SESSION['respuesta_s7p6'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Costeo de equipos en los dierentes servicios: El no contar con un costeo claro de los equipos en cada servicio puede llevar a una estrategia de precios inadecuada, tanto para llegar a una utilidad negativa como para fijar un precio elevado que ahuyenta la venta.' . "\n");
    $hayDebilidades7 = true;
}
if ($_SESSION['respuesta_s7p7'] == '1' || $_SESSION['respuesta_s7p7'] == '2') {
    $bodyContentDebilidades7 .= utf8_decode('- Nivel de utilización de los equipos: La falta de utilización de equipos conlleva a un bajo retorno de la inversión.' . "\n");
    $hayDebilidades7 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades7 == false) {
    $bodyContentDebilidades7 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades7);
////////////////
// Sección 8 //
//////////////
$pdf->chapterTitle(8, utf8_decode('Recursos Humanos'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas8 = '';

if ($_SESSION['respuesta_s8p1'] == '4' || $_SESSION['respuesta_s8p1'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Personal en general: El contar con un equipo fuerte de empleados permite una mejor distribución de tareas y el uso eficiente del tiempo del doctor.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p2'] == '4' || $_SESSION['respuesta_s8p2'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Equipo de personas suficiente y asignado a labores especificas: Contar con el personal adecuado en cada posición conlleva a que cada tarea se ejecute de una mejor manera, efectiva y eficiente.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p3'] == '4' || $_SESSION['respuesta_s8p3'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Administración de nómina: Contar con un sistema de nómina confiable evita errores en el control, seguimiento y pago a los empleados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p4'] == '4' || $_SESSION['respuesta_s8p4'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Perfiles de puestos / Descripción de responsabilidades: Una alta claridad en roles y responsabilidades en la descripción de puestos de cada empleado permite una mayor eficiencia y eficacia de cada uno.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p5'] == '4' || $_SESSION['respuesta_s8p5'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Metas y objetivos claros por persona: La calidad de metas objetivos y metas específicos de cada posición permiten un mejor desempeño de los empleados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p6'] == '4' || $_SESSION['respuesta_s8p6'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Incentivos / Bonos y comisiones: Un programa de metas con bonos e inventivos genera un mejor desempeño de los empleados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p7'] == '4' || $_SESSION['respuesta_s8p7'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Competitividad laboral: La alta competitividad laboral y los perfiles adecuados generan un mejor desempeño y una rotación baja, por lo tanto plantillas estables que dan mayor certeza al negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p8'] == '4' || $_SESSION['respuesta_s8p8'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Rotación: La baja rotación de empleados suele ser resultado de una estabilidad personal y profesional de los empleados que dar certeza al negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p9'] == '4' || $_SESSION['respuesta_s8p9'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Reclutamiento: Contar con un proceso de reclutamiento profesional origina mayor eficiencia y eficacia en la contratación de personal, lo que conlleva contar con el personal adecuado que da certeza al negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p10'] == '4' || $_SESSION['respuesta_s8p10'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Comunicación y alineación: Una comunicación sólida permite una mejor alineación de los empleados en la búsqueda de mejores resultados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p11'] == '4' || $_SESSION['respuesta_s8p11'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Gestión de doctores y enfermeras: Una buena gestión de doctores y enfermeras permite un mejor seguimiento de tareas y objetivos para el logro de mejores resultados.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p12'] == '4' || $_SESSION['respuesta_s8p12'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Reconocimiento / premios: Un sistema de premios y reconocimientos permite mantener comprometido y motivado a un equipo de alto desempeño.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p13'] == '4' || $_SESSION['respuesta_s8p13'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Liderazgo y desarrollo de otros: Impulsar liderazgo y desarrollo de otros conlleva a un crecimiento de las personas y del mismo  negocio.' . "\n");
    $hayFortalezas8 = true;
}
if ($_SESSION['respuesta_s8p14'] == '4' || $_SESSION['respuesta_s8p14'] == '5') {
    $bodyContentFortalezas8 .= utf8_decode('- Capacitación y entrenamiento: Contar con un programa de entrenamientos y capacitación conlleva a personal mejor preparado en la atención del cliente y ejecución de los servicios.' . "\n");
    $hayFortalezas8 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas8) {
    $bodyContentFortalezas8 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas8);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades8 = '';

if ($_SESSION['respuesta_s8p1'] == '1' || $_SESSION['respuesta_s8p1'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Personal en general: La falta de empleados conlleva al mala distribución del tiempo del doctor, perdiendo mucho tiempo en actividades de bajo valor para el negocio.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p2'] == '1' || $_SESSION['respuesta_s8p2'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Equipo de personas suficiente y asignado a labores especificas: La falta de personal en posiciones claves conlleva a que una persona no adecuada tome roles y responsabilidades y estas no se ejecuten de manera correcta.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p3'] == '1' || $_SESSION['respuesta_s8p3'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Administración de nómina: El no contar con una administración de nomina puede originar falta de seguimiento, de control y errores al momento de pagar.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p4'] == '1' || $_SESSION['respuesta_s8p4'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Perfiles de puestos / Descripción de responsabilidades: La falta de roles y responsabilidades claros en la descripción de puesto conlleva a una reducción en la eficiencia y eficacia de los empleados.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p5'] == '1' || $_SESSION['respuesta_s8p5'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Metas y objetivos claros por persona: La falta de objetivos y metas claras por empleado provocan ineficiencia y bajos resultados.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p6'] == '1' || $_SESSION['respuesta_s8p6'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Incentivos / Bonos y comisiones: La falta de bonos e incentivos puede provocar un desempeño bajo de los empleados.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p7'] == '1' || $_SESSION['respuesta_s8p7'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Competitividad laboral: La baja competitividad laboral y los perfiles bajos que se contratan pueden generar problemas de desempeño o bien una rotación alta.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p8'] == '1' || $_SESSION['respuesta_s8p8'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Rotación: La alta rotación de personal genera una perdida de continuidad en el negocio, ineficiencias y curvas de aprendizaje permanentes.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p9'] == '1' || $_SESSION['respuesta_s8p9'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Reclutamiento: La falta de un proceso de reclutamiento profesional puede originar ineficiencia y poca eficacia en la contratación de personal.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p10'] == '1' || $_SESSION['respuesta_s8p10'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Comunicación y alineación: La falta de comunicación al equipo conlleva desalineación y reduce la eficiencia.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p11'] == '1' || $_SESSION['respuesta_s8p11'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Gestión de doctores y enfermeras: La falta de una gestión puntual de doctores y enfermeras conlleva a una falta de claridad de los objetivos y tareas diarias y semanales.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p12'] == '1' || $_SESSION['respuesta_s8p12'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Reconocimiento / premios: La falta de precios y reconocimientos periódicos puede mercar el desempeño de los colaboradores.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p13'] == '1' || $_SESSION['respuesta_s8p6'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Liderazgo y desarrollo de otros: No impulsar liderazgo ni desarrollo de otros conlleva a una falta de crecimiento de las personas en el negocio.' . "\n");
    $hayDebilidades8 = true;
}
if ($_SESSION['respuesta_s8p14'] == '1' || $_SESSION['respuesta_s8p14'] == '2') {
    $bodyContentDebilidades8 .= utf8_decode('- Capacitación y entrenamiento: No contar con entrenamientos y capacitación conlleva a personal no preparado en la atención del cliente y ejecución de los servicios.' . "\n");
    $hayDebilidades8 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades8 == false) {
    $bodyContentDebilidades8 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades8);
////////////////
// Sección 9 //
//////////////
$pdf->chapterTitle(9, utf8_decode('Instalaciones'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas9 = '';

if ($_SESSION['respuesta_s9p1'] == '4' || $_SESSION['respuesta_s9p1'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Área de recepción: Un adecuado espacio de recepción permite una estancia mas agradable y en general una mejor experiencia del usuario.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p2'] == '4' || $_SESSION['respuesta_s9p2'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Consultorios: Una adecuada cantidad de consultorios permite una mejor atención a los pacientes, un mejor uso del tiempo del doctor  y espacio para el crecimiento futuro.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p3'] == '4' || $_SESSION['respuesta_s9p3'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Cubículos de servicios: Una adecuada cantidad de cubículos para la ejecución de servicio permite una mayor cantidad de pacientes y mayor comodidad para ellos.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p4'] == '4' || $_SESSION['respuesta_s9p4'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Nivel de utilización de las utilizaciones: Una lata utilización de las instalaciones permite un mejor apalancamientos y aprovechamiento de las instalaciones con las que se cuenta.' . "\n");
    $hayFortalezas9 = true;
}
if ($_SESSION['respuesta_s9p5'] == '4' || $_SESSION['respuesta_s9p5'] == '5') {
    $bodyContentFortalezas9 .= utf8_decode('- Mantenimiento / Estado de instalaciones: Un buen mantenimiento y estado de las instalaciones conlleva a una mejor experiencia de los usuarios.' . "\n");
    $hayFortalezas9 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas9) {
    $bodyContentFortalezas9 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas9);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades9 = '';

if ($_SESSION['respuesta_s9p1'] == '1' || $_SESSION['respuesta_s9p1'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Área de recepción: La falta de espacio para una recepción cómoda puede ahuyentar la asistencia de las personas o hacer su estancia menos agradable.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p2'] == '1' || $_SESSION['respuesta_s9p2'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Consultorios: La falta de consultorio y espacios adecuados para atender a los pacientes puede ahuyentar a las personas a que asistan a la clínica.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p3'] == '1' || $_SESSION['respuesta_s9p3'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Cubículos de servicios: La falta de cubículos para aplicar servicios limite la cantidad de pacientes que pueden visitar la clínica.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p4'] == '1' || $_SESSION['respuesta_s9p4'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Nivel de utilización de las utilizaciones: La poca utilización de la capacidad de las instalaciones puede representar una carga de gastos fijos importantes que no correspondan a las ventas potenciales del negocio.' . "\n");
    $hayDebilidades9 = true;
}
if ($_SESSION['respuesta_s9p5'] == '1' || $_SESSION['respuesta_s9p5'] == '2') {
    $bodyContentDebilidades9 .= utf8_decode('- Mantenimiento / Estado de instalaciones: Un mal mantenimiento o estado de las instalaciones puede ahuyentar la asistencia de pacientes.' . "\n");
    $hayDebilidades9 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades9 == false) {
    $bodyContentDebilidades9 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades9);
////////////////
// Sección 10 //
//////////////
$pdf->chapterTitle(10, utf8_decode('Proyecto personal / Estatus del negocio'));
$pdf->chapterSub('FORTALEZAS:');
$bodyContentFortalezas10 = '';

if ($_SESSION['respuesta_s10p1'] == '4' || $_SESSION['respuesta_s10p1'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Tiempo dedicado a la clínica / consultorio propio: El tiempo dedicado al 100% permite que un consultorio o clínica se desarrolle en mejores circunstancias.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p2'] == '4' || $_SESSION['respuesta_s10p2'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- % de agenda llena: Una agenda saturada es indicación tanto de una productividad mayor pero también de un potencial de crecimiento a futuro.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p3'] == '4' || $_SESSION['respuesta_s10p3'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Madurez del negocio: Una madurez del negocio conlleva a mayor control en la operación actual pero también a potencializar un posible crecimiento futuro del modelo.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p4'] == '4' || $_SESSION['respuesta_s10p4'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Conformidad profesional: Una mayor conformidad profesional me permite enfocarme en lo que mas me gusta y en lo que mas valor puedo ofrecer a mis pacientes.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p5'] == '4' || $_SESSION['respuesta_s10p5'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Conformidad personal: La búsqueda permanente de crecimiento personal conlleva a un impulso del negocio propio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p6'] == '4' || $_SESSION['respuesta_s10p6'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Balance Vida-Trabajo: Un buen balance de vida-trabajo conlleva a un mejor desempeño persona y profesional, convirtiendo ambas dimensiones en un circulo virtuoso.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p7'] == '4' || $_SESSION['respuesta_s10p7'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Pasión: Una fuerte entrega y pasión representa el principal impulso para llevar el negocio a otro nivel.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p8'] == '4' || $_SESSION['respuesta_s10p8'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Creatividad: La alta creatividad e innovación en el negocio permiten un mejor crecimiento rentable para el negocio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p9'] == '4' || $_SESSION['respuesta_s10p9'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Persistencia: Una alta persistencia y constancia conlleva a la superación permanente de las metas y proyección del negocio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p10'] == '4' || $_SESSION['respuesta_s10p10'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Autonomía: Una autonomía y libertad para la toma de decisiones, inversiones, etc.… conlleva a una reinvención recurrente de aprendizaje y superación.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p11'] == '4' || $_SESSION['respuesta_s10p11'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Autoestima: Una fuerte autoestima y confianza propia representan un excelente motor en el desarrollo y crecimiento del negocio.' . "\n");
    $hayFortalezas10 = true;
}
if ($_SESSION['respuesta_s10p12'] == '4' || $_SESSION['respuesta_s10p12'] == '5') {
    $bodyContentFortalezas10 .= utf8_decode('- Es oportuno: Una alta capacidad para identificar necesidades y tendencias se traduce en productos y servicios diferenciados con posibilidad de refleja alto valor respecto a lo que hay en el mercado convencionales y poco diferenciados del mercado.' . "\n");
    $hayFortalezas10 = true;
}
// Verifica si hay alguna fortaleza
if (!$hayFortalezas10) {
    $bodyContentFortalezas10 = utf8_decode('No hay fortalezas relevantes.' . "\n");
}

$pdf->chapterBody($bodyContentFortalezas10);
$pdf->chapterSub('DEBILIDADES:');
$bodyContentDebilidades10 = '';

if ($_SESSION['respuesta_s10p1'] == '1' || $_SESSION['respuesta_s10p1'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Tiempo dedicado a la clínica / consultorio propio: La falta de tiempo dedicado al consultorio propio es la principal causa por la cual la iniciativa propia no crece al ritmo que se desearía.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p2'] == '1' || $_SESSION['respuesta_s10p2'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- % de agenda llena: La falta de pacientes agendados merma sustancialmente la productividad y rentabilidad de la clínica y del tiempo del doctor.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p3'] == '1' || $_SESSION['respuesta_s10p3'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Madurez del negocio: La falta de madurez del negocio le resta identidad y fuerza de marca, además de protocolos de atención débiles.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p4'] == '1' || $_SESSION['respuesta_s10p4'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Conformidad profesional: La poca conformidad sin acción para lograr mayor eficiencia puede provocar un fuerte estancamiento en el desarrollo del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p5'] == '1' || $_SESSION['respuesta_s10p5'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Conformidad personal: La falta de motivación por crecer personalmente puede desincentivas el crecimiento del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p6'] == '1' || $_SESSION['respuesta_s10p6'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Balance Vida-Trabajo: La falta de balance vida-trabajo en muchas ocasiones conlleva a perder foco y atención a las cosas que realmente importan, personal y profesionalmente.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p7'] == '1' || $_SESSION['respuesta_s10p7'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Pasión: Falta de pasión y entrega puede representar un impedimento importante en el desarrollo del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p8'] == '1' || $_SESSION['respuesta_s10p8'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Creatividad: La falta de creatividad e innovación repercute en baja diferenciación de productos y servicios, y ser uno mas de las opciones del mercado.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p9'] == '1' || $_SESSION['respuesta_s10p9'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Persistencia: Una baja persistencia y constancia para el impulso del negocio representa un permanente freno para el crecimiento.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p10'] == '1' || $_SESSION['respuesta_s10p10'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Autonomía: Falta de autonomía y liberta para tomar decisiones y tomar riesgos representa un freno en el desarrollo del negocio.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p11'] == '1' || $_SESSION['respuesta_s10p11'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Autoestima: Falta de autoestima y confianza en uno mismo merma la energía y la capacidad para salir adelante.' . "\n");
    $hayDebilidades10 = true;
}
if ($_SESSION['respuesta_s10p12'] == '1' || $_SESSION['respuesta_s10p12'] == '2') {
    $bodyContentDebilidades10 .= utf8_decode('- Es oportuno: La poca capacidad para identificar necesidades y tendencias se traduce en productos y servicios convencionales y poco diferenciados del mercado.' . "\n");
    $hayDebilidades10 = true;
}
// Verifica si hay alguna debilidad
if ($hayDebilidades10 == false) {
    $bodyContentDebilidades10 = utf8_decode('No hay debilidades relevantes.' . "\n");
}
$pdf->chapterBody($bodyContentDebilidades10);

// Ruta donde se guardará el PDF automáticamente
$rutaGuardado = 'PDFS/Respuesta.pdf';

$pdf->Output($rutaGuardado, 'F'); // 'F' indica que se guardará en el servidor

// Nombre del archivo PDF
$nombreArchivo = 'RespuestasUsuario.pdf';


///// enviar por correo

$destinatario = $_POST['email'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.ionos.mx';  // Cambia esto con la dirección de tu servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'diagnostico@dnafactorymedicos.com'; // Cambia esto con tu nombre de usuario SMTP
$mail->Password = 'diag.dna01'; // Cambia esto con tu contraseña SMTP
$mail->SMTPSecure = 'tls'; // Puede ser 'ssl' o 'tls'
$mail->Port = 587; // Puerto SMTP

$mail->setFrom('diagnostico@dnafactorymedicos.com', 'DNA Factory Medicos'); // Cambia con tu dirección de correo y nombre
$mail->addAddress($destinatario);
$mail->Subject = 'Resultado del Diagnostico';
$mail->Body = 'Adjunto encontrarás tus respuestas en formato PDF. \n \n Datos de usuario: \n Nuevo test de: ' . $_POST['nombre'] . '\nEspecialidad: ' . $_POST['email'] . '\nCorreo: ' . $_POST['email'];
$mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

if ($mail->send()) {

    echo 'Correo enviado correctamente';

    $mail->setFrom('diagnostico@dnafactorymedicos.com', 'DNA Factory Medicos'); // Cambia con tu dirección de correo y nombre
    $mail->addAddress('diagnostico@dnafactorymedicos.com');
    $mail->Subject = 'RESULTADO: ' . $_POST['nombre'];
    $mail->Body = 'Nuevo test de: ' . $_POST['nombre'] . '\nEspecialidad: ' . $_POST['email'] . '\nCorreo: ' . $_POST['email'];
    $mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

    $mail->send();

} else {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;

    $mail->setFrom('diagnostico@dnafactorymedicos.com', 'DNA Factory Medicos'); // Cambia con tu dirección de correo y nombre
    $mail->addAddress('diagnostico@dnafactorymedicos.com');
    $mail->Subject = 'RESULTADO: ' . $_POST['nombre'];
    $mail->Body = '(Debido a un error este correo no le ha llegado al usuario, favor de compartir este PDF por otro medio.) \n Nuevo test de: ' . $_POST['nombre'] . '\nEspecialidad: ' . $_POST['email'] . '\nCorreo: ' . $_POST['email'];
    $mail->addAttachment($rutaGuardado, 'RespuestasDNAFactory.pdf'); // Adjunta el PDF generado

    $mail->send();
}
/////

// Salida del PDF al navegador

$pdf->Output($nombreArchivo, 'D');



// Redirige al usuario a la página actualcen caso de error
// header('Location: nombre_de_tu_pagina.php');

exit();
?>