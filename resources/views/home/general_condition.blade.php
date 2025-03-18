@extends('layouts.home_layout', ['static_data', $static_data ? $static_data : ''])
{{-- {{dd($static_data['design_settings']['slider_background'])}} --}}
@section('title')
    <title>{{ $static_data ? $static_data['strings']['general_conditions_title'] : '' }}</title>
    <meta name="title" content="{{ $static_data ? $static_data['strings']['general_conditions_title'] : '' }}">
    <meta name="description" content="{{ $static_data ? $static_data['strings']['general_conditions_description'] : '' }}">
    <meta name="author" content="{{ $static_data ? $static_data['strings']['general_conditions_title'] : '' }}">
    <meta car="og:title" content="{{ $static_data ? $static_data['strings']['general_conditions_title'] : '' }}" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . ($static_data ? $static_data['design_settings']['slider_background'] : '') }}" />
@endsection

@section('bg')
    {{ asset('/assets/images/home/') . '/' . ($static_data ? $static_data['design_settings']['slider_background'] : '') }}
@endsection

@section('content')
    <div class="container">

        <h1 class="h1 car_details_header">{{ $static_data ? $static_data['strings']['general_conditions'] : '' }}</h1>

        <!--<ul class="list-icons" style="list-style: none;">

            <li><i class="fa fa-check-circle"></i><strong>Utilisation de la voiture</strong>

            Le locataire ,lui seul est amené à conduire la vehicule de location Marrakech,dont il se porte garant et ne doit l’utiliser que pour ses besoins personnels.

            L’agence interdit strictement le locataire à participer à toute compétition et d’utiliser le véhicule a des fins illicites ou des transports de marchandises.

            Le locataire doit s’engager a ne pas solliciter des documents douaniers.

            Il est interdit au locataire de surcharger le véhicule loué en transportant un nombre de passagers supérieur à celui indiqué sur le contrat  sous peine d’être déchu de l’assurance.<</li>

            <li><i class="fa fa-check-circle"></i><strong>Etat de la voiture & responsabilité</strong>

            Le vehicule se livre en tres bon  état de marche et de propreté  et  le locataire devra acquitter le montant  de remise en état. Ainsi il demeure seul responsable des amendes, contravention et procès verbaux établis contre lui.</li>

            <li><i class="fa fa-check-circle"></i><strong>Assurance</strong>

            Les vehicules JACARANDA pour la <b>location des voitures</b> sont assurés tout risques , bien entendu le vehicule , vol ,brice de glace, conducteurs et passagers.</li>

            <li><i class="fa fa-check-circle"></i><strong>Réservation & livraison </strong>

            Réservez chez JACARANDA en ligne et beneficiez de nos promos de tous les jours.

            JACARANDA CAR assure la livraison des <b>vehicules à l’aeroport</b>, hotel et à l’agence JACARANDA gratuitement 7/7 et 24/24.

            Toute information supplémentaire par rapport a la reservation serait communiquée au locataire apres la reservation.  <br>

            </li>

        </ul-->

        @if (Session::get('language') == 'en') 
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>What you need to know before Renting a car In Marrakech </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Kindly read the following information carefully, as they set out the terms and
                                        conditions for your rental car at marrakech with our company.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>Rates included</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>Unlimited mileage.</li>
                                        <li>24/7 assistance. </li>
                                        <li>Free delivery to the airport, hotels or riad.</li>
                                        <li>2nd driver.</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>Duration</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>The rental period can only be extended with our agreement.</li>
                                        <li>For all delivery or return outside Marrakech, the minimum rental period must be
                                            equal to or greater than 7 days.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>Insurances </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>Our rates include liability to third party with an excess.</li>
                                        <li>Using unpaved roads is prohibited , damages caused are not covered by insurance.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>Fuel</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>The car will be returned with the same level as on delivery, any supplement fuel
                                            left not be refunded. </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>Delivery / Collection</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>You can pick-up or return our cars where you want at Marrakech ( Marrakech
                                            airport, hotels, railway stations .etc..).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>Required Documents</h3>
                            </a>

                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>Driver licence.</li>
                                        <li>Passeport.</li>
                                        <li>Original documents required.</li>
                                        <li>Driving licence of 2 years minimum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>Payment</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>Payment by cash / credit card at the pick-up or you can choose to pay online.
                                        </li>
                                        <li>All credit card accepted (Except American express).</li>
                                        <li>There is no deposit required if you choosed Full coverage insurance (0 excess).
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>Refund</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <ul>
                                        <li>Refunds not allowed in the event of the hire being terminated early.</li>
                                        <li>If you choose online paiement, You can cancel the reservation up to 48h before
                                            the rental is due to start. In case your the payment is already received we will
                                            keep the full amount for upcoming reservation.</li>
                                        <li>Once you have made a reservation you must wait for a confirmation from us within
                                            6 hours.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>

                </main>

            </div>
        @elseif(Session::get('language') == 'es')
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>1. Preámbulo</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>El Cliente o Arrendatario reconoce haber leído, con anterioridad a su reserva, todas
                                        las condiciones siguientes y también reconoce tener capacidad para celebrar este
                                        contrato.
                                    </p>
                                    <p>
                                        Las siguientes condiciones generales de venta rigen todas las transacciones
                                        establecidas en el catálogo web de Jacaranda porque cualquier pedido realizado en
                                        este sitio implica la aceptación incondicional e irrevocable por parte del cliente
                                        de estas condiciones. Si el Cliente o el Arrendatario no acepta estos Términos, los
                                        rechazará de facto. y entonces tendrá que interrumpir el proceso de reserva. De lo
                                        contrario, el Cliente o Arrendatario reconoce haber leído y entendido estos Términos
                                        y los acepta.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>2. Condiciones a cumplir para alquilar</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Deberá facilitarnos a la entrega del vehículo, con los justificantes y originales:
                                    <ul>
                                        <li> Una licencia de conducir válida por al menos 24 meses.</li>
                                        <li> Pasaporte.</li>
                                        <li> Un medio de pago y (Tarjeta bancaria, Efectivo, etc.)</li>
                                        <li> No conservamos los originales de estos documentos.</li>
                                        <li> Todos los conductores deben tener al menos 23 años y haber tenido un permiso de
                                            conducir válido durante al menos 24 meses.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>3. Duración del alquiler / Extensión </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>3.1. Método de cálculo</h4>
                                    <p>El periodo de alquiler se calcula en incrementos de 24 horas, no divisibles, desde el
                                        momento de la recogida del vehículo, no obstante te beneficias de una tolerancia de
                                        3 horas a partir de las cuales se aplica un nuevo periodo de 24 horas.
                                    </p>
                                    <p>Si desea ampliar su alquiler, necesitará nuestro acuerdo previo, una vez que tenga
                                        este acuerdo, debe acudir a nuestra agencia para renovar el contrato y pagar el
                                        importe del alquiler adicional.
                                    </p>
                                    <p>En el caso de que le resulte difícil llegar a nuestra agencia, se le enviará una
                                        copia del contrato de prórroga por correo electrónico o fax.
                                    </p>
                                    <p>Para toda entrega o devolución fuera de Marrakech, el período mínimo de alquiler debe
                                        ser igual o superior a 7 días.
                                    </p>
                                    <h4>3.2. Fin del alquiler</h4>
                                    <p>El alquiler se considera completo cuando se devuelven las llaves y los papeles del
                                        coche a nuestro agente.
                                        En el caso de que el vehículo sea devuelto sin sus papeles o llaves, se cobrará al
                                        cliente duplicado de tasas.
                                        De ninguna manera podemos hacernos responsables de los bienes que se hayan olvidado
                                        en los vehículos al final del alquiler.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>4. Vehículo</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>4.1. Condición del vehículo</h4>
                                    <p>Recibirá un vehículo en buen estado de funcionamiento y limpio, debe asegurarse antes
                                        de su salida del lugar de entrega de que cualquier defecto aparente en el vehículo
                                        se menciona en el contrato de alquiler, en su defecto, cualquier daño aparente no
                                        mencionado en el contrato de alquiler salida del vehículo no será considerado y
                                        generará gastos de reparación a su cargo hasta el deducible.
                                        Excepto en el caso de que previamente hayas remitido un informe amistoso a nuestro
                                        departamento de reclamaciones o se estipule que no tienes la culpa. (Ver apartado
                                        responsabilidad en caso de daños)</p>
                                    <h4>4.2. Uso del vehículo</h4>
                                    <ul>
                                        <li>Usted acepta conducir el vehículo “como un buen padre”.</li>
                                        <li>Usted se compromete a utilizar el vehículo únicamente en carreteras asfaltadas a
                                            menos que sea un 4x4, cualquier daño causado al vehículo derivado del
                                            incumplimiento de esta cláusula correrá a cargo del arrendatario y se le
                                            facturarán los gastos de reparación no cubiertos por el seguro. .</li>
                                        <li>Está prohibido utilizar el vehículo fuera del territorio marroquí sin
                                            autorización por escrito emitida por nosotros.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>5. Pago</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Para cualquier reserva realizada en nuestro sitio, se le pedirá que pague un depósito
                                        en línea, el resto lo pagará a la entrega del automóvil en efectivo o con tarjeta de
                                        crédito, sin embargo, a excepción de una entrega dentro de nuestra agencia, debe
                                        notificarnos por correo electrónico o por teléfono si desea pagar con tarjeta para
                                        planificar llevar el terminal de pago.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>6. Seguro / Responsabilidad en caso de daños</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Todos nuestros vehículos están asegurados a todo riesgo, no obstante una franquicia
                                        del 10% ya cargo del cliente en caso de que se comprometa su responsabilidad parcial
                                        o total.</p>
                                    <p>Le recordamos que no es posible recurrir al seguro en caso de que el inquilino no nos
                                        presente un informe amistoso o un informe de la gendarmería o la policía.</p>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>7. Enmienda</h3>
                            </a>

                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>La modificación en Jacaranda car es gratuita antes de hacerse cargo del vehículo</p>
                                    <h4>7.1. Modificación antes de hacerse cargo del vehículo</h4>
                                    <p>Cualquier modificación deberá realizarse a través del área de clientes, o a través
                                        del correo electrónico info@jacarandacar.com en un plazo no superior a 12 horas
                                        antes de hacerse cargo del vehículo.
                                        N.B: Nos reservamos el derecho de aceptar o rechazar esta modificación según el
                                        horario del vehículo sujeto a la modificación.

                                        Si aceptamos la modificación, deberá disponer de un nuevo bono en su área de
                                        cliente, deberá imprimirlo y presentarlo a nuestro agente el día de la entrega.
                                        Si rechazamos la modificación, las condiciones iniciales de reserva siguen siendo
                                        válidas, así como el bono.</p>
                                    <h4>7.2. Modificación después de hacerse cargo del vehículo</h4>
                                    <p>Si desea modificar o ampliar su alquiler, necesitará nuestro acuerdo previo, una vez
                                        que tenga este acuerdo debe acudir a nuestra agencia para modificar el contrato y
                                        proceder, en el caso de una extensión al pago del importe de la renta adicional. .
                                        En el caso de que le resulte difícil llegar a nuestra agencia, se le enviará una
                                        copia del contrato de prórroga por correo electrónico o fax.</p>
                                    <h4>7.3. Reembolso anticipado</h4>
                                    <p>Después de hacerse cargo del vehículo y firmar el contrato de alquiler, cualquier
                                        devolución anticipada del vehículo no le dará derecho a la devolución de los días de
                                        alquiler no utilizados, sin embargo, tendrá derecho a una nota de crédito personal
                                        equivalente a la cantidad de días restantes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>8. Cancelación y no soporte del vehículo</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">

                                    <p>Puede cancelar su reserva hasta el último minuto antes de la hora de recogida del
                                        vehículo sin motivo ni prueba.

                                        La siguiente tabla describe las tarifas de procesamiento cargadas a su reembolso:
                                    </p>
                                    <table border="1" cellpadding="0" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td style="height:63px; width:358px">
                                                    <p><b>Cancelación dentro de las 48 horas anteriores a la recogida del
                                                            vehículo.</b></p>
                                                </td>
                                                <td style="height:63px; width:198px">
                                                    <p><b>Reembolso completo</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:56px; width:358px">
                                                    <p><b>Cancelación en menos de 48 horas antes de recoger el vehículo.</b>
                                                    </p>
                                                </td>
                                                <td style="height:56px; width:198px">
                                                    <p><b>50% del monto del depósito pagado en línea.</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:108px; width:358px">
                                                    <p><b>Caso de cancelación por parte del cliente después de la hora de
                                                            recogida indicada en el bono,<br>
                                                            Caso de no presentarse,
                                                            <br>
                                                            Caso de presentación tardía,<br>
                                                            caso de incumplimiento de las condiciones de alquiler (falta de
                                                            presentación de todos los documentos, problema con la tarjeta de
                                                            crédito, etc.)</b></p>
                                                </td>
                                                <td style="height:108px; width:198px">
                                                    <p><b>Sin reembolsos.</b></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Te recordamos que estos porcentajes se aplican sobre el depósito pagado online al
                                        hacer la reserva y no sobre el importe total del alquiler, este depósito ronda el
                                        20% del coste total del alquiler.
                                        Para evitar estos gastos de cancelación, le ofrecemos la posibilidad de obtener una
                                        nota de crédito por un período de 2 años, igual al valor del depósito pagado en
                                        línea.
                                        El crédito se puede usar en cualquier alquiler de auto con Jacaranda car, solo por
                                        teléfono.
                                        Esta nota de crédito es nominativa, intransferible e intransferible, más allá de los
                                        2 años su valor es cero y el importe correspondiente cobrado por Jacaranda porque
                                        sigue siendo de nuestra propiedad.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>9. Tasa</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>El "Coste total del alquiler" comunicado en la página de detalle de la reserva, es el
                                        que realmente pagarías, no habrá sorpresas el día de la entrega.
                                        El pago se realiza en dos plazos, un depósito a pagar online de forma inmediata, y
                                        el resto se abonará el día de la recogida del coche al agente encargado de
                                        entregártelo.</p>
                                    <h4>9.1 Que esta incluido en el precio</h4>
                                    <div class="contentConditions2" style="display: block;">
                                        <p><b>=> </b>Un paquete de varios&nbsp; el día limitado calculado en incrementos de
                                            24 horas es en kilómetros ilimitados.</p>

                                        <p><b>=> </b>IVA.</p>

                                        <p><b>=> </b>Seguro a todo riesgo con franquicia no redimible del 10%.</p>

                                        <p><b>=></b>Seguro para las personas transportadas, por robo y por incendio.</p>

                                        <p><b>=> </b>Seguro de rotura de cristales con franquicia del 10%.</p>

                                        <p><b>=> </b>el segundo conductor.</p>

                                        <p><b>=> </b>Soporte 24/7.</p>

                                        <p><b>=> </b>Entrega y recuperación del vehículo en el lugar y ciudad elegidos por
                                            el cliente al realizar la reserva.</p>
                                    </div>
                                    <h4>9.2 Lo que no está incluido en el precio. </h4>
                                    <p>Multa es contravención:
                                        El cliente sigue siendo el único responsable de las multas, multas e informes
                                        elaborados en su contra. Si no se libera de las multas a las que ha estado sujeto
                                        durante su estancia, tendremos derecho a exigir el pago de estas multas. .
                                        Si recibimos multas después de la salida del cliente, nos reservamos el derecho de
                                        proporcionar a la policía o la gendarmería toda la información necesaria relacionada
                                        con el cliente responsable de estas multas.
                                        En el caso de un remolque del coche a la perrera por mal estacionamiento del cliente
                                        o estacionamiento en zona prohibida, o cualquier otra causa resultante de la
                                        negligencia del arrendatario, sólo el cliente es responsable de proceder a la salida
                                        del vehículo de la libra mediante el pago de las multas y la realización de todos
                                        los trámites administrativos necesarios para la obtención del bono de salida.
                                        No obstante, podemos hacernos cargo de estas tareas y obtener el comprobante de
                                        salida por una tarifa de servicio que se le facturará al cliente además del precio
                                        de las multas generadas, en este caso es necesaria la presencia del cliente a la
                                        salida del vehículo.</p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>10. Reserva</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>El proceso de reserva en Jacaranda car es muy simple, los autos que aparecen en el
                                        resultado de búsqueda están realmente disponibles.
                                        Tu coche está garantizado desde el momento en que pagas tu reserva y recibes el
                                        Bono, no es posible ninguna cancelación por nuestra parte.</p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>11. Protección de la privacidad</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Durante el proceso de reserva, se nos solicitará que nos proporcione información,
                                        algunas de las cuales son obligatorias (indicadas con un asterisco en nuestro sitio
                                        web) porque son esenciales para procesar su reserva, otras son opcionales que
                                        ayudaremos a servir mejor, esta información de ninguna manera será transmitida a un
                                        tercero.
                                        Tiene la posibilidad de modificar esta información iniciando sesión en su área de
                                        cliente, en el caso de que desee eliminar su cuenta, solo necesita enviar una
                                        solicitud a través de la dirección de correo electrónico utilizada para crear su
                                        cuenta a la siguiente dirección de correo electrónico: info @ jacarandacar.com
                                        La información de su tarjeta de crédito utilizada para el pago de su reserva no se
                                        comunica, almacena ni transmite en ninguna etapa del proceso a jacarandacar.com
                                        La parte de pago del proceso de reserva se realiza en un centro de pago seguro.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                </main>

            </div>
        @elseif(Session::get('language') == 'it')
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>1. Preambolo</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Il Cliente o Conduttore riconosce di aver, prima della sua prenotazione, preso
                                        conoscenza di tutte le seguenti condizioni e riconosce inoltre,
                                        avere la capacità di stipulare questo contratto.
                                    </p>
                                    <p>
                                        Le seguenti condizioni generali di vendita regolano tutte le transazioni
                                        stabilito sul catalogo web di auto Jacaranda, qualsiasi ordine effettuato su questo sito
                                        presuppone l'accettazione incondizionata e irrevocabile da parte del cliente delle presenti condizioni,
                                        Se il Cliente o il Locatario non accetta i presenti Termini, li rifiuterà di fatto, e
                                        dovrà quindi interrompere il processo di prenotazione. In caso contrario, il Cliente o il Locatario
                                        riconosce di aver letto e compreso i presenti Termini e li accetta.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>2. Condizioni da rispettare per affittare </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Devi fornirci alla consegna del veicolo, con documenti giustificativi e originali:
                                    <ul>
                                        <li>Una patente di guida valida per almeno 24 mesi.</li>
                                        <li> Un passaporto.</li>
                                        <li> Un mezzo di pagamento e (carta bancaria, contanti…ecc.)</li>
                                        <li>Non conserviamo gli originali di questi documenti.</li>
                                        <li>Tutti i conducenti devono avere almeno 23 anni e devono essere in possesso di una patente.
                                            patente di guida valida da almeno 24 mesi.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>3. Durata del noleggio / Estensione</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>3.1. Metodo di calcolo</h4>
                                    <p>Il periodo di noleggio è calcolato in incrementi di 24 ore, non divisibili, da
                                        l'orario di ritiro del veicolo, tuttavia si beneficia di una tolleranza
                                        di 3 ore dalle quali si applica un nuovo termine di 24 ore.
                                    </p>
                                    <p>Se desideri prolungare il tuo noleggio, avrai bisogno del nostro accordo
                                        prima, una volta che hai questo accordo devi andare alla nostra agenzia
                                        rinnovare il contratto e pagare l'importo dell'affitto
                                        aggiuntivo.
                                    </p>
                                    <p>Nel caso in cui sia difficile per te venire alla nostra agenzia, una copia del
                                        Il contratto di estensione ti verrà inviato via e-mail o fax.
                                    </p>
                                    <p> Per tutte le consegne o i resi al di fuori di Marrakech, il periodo minimo di noleggio deve essere
                                        essere uguale o superiore a 7 giorni.</p>
                                    <h4>3.2. Fine del noleggio </h4>
                                    <p>Il noleggio è considerato completo quando le chiavi vengono restituite e
                                        documenti dell'auto al nostro agente.
                                        Nel caso in cui il veicolo venga restituito senza documenti o chiavi, le spese di
                                        duplicato sarà fatturato al cliente.
                                        Non possiamo in alcun modo essere ritenuti responsabili per i beni che potrebbero essere stati
                                        dimenticato nei veicoli al termine del noleggio.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>4. Il veicolo</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>4.1. Stato del veicolo</h4>
                                    <p>Riceverai un veicolo pulito e funzionante, devi assicurarti prima
                                        la tua partenza dal luogo di consegna che qualsiasi difetto apparente sul veicolo
                                        essere menzionato sul contratto di noleggio, in mancanza di eventuali danni apparenti no
                                        menzionato sul contratto di noleggio all'inizio del veicolo non sarà considerato e
                                        genererà costi di riparazione a tuo carico fino alla franchigia.
                                        Tranne nel caso in cui tu abbia precedentemente fornito al nostro ufficio reclami a
                                        relazione amichevole o è stabilito che non vi sia colpa. (Vedi sez
                                        responsabilità per danni)</p>
                                    <h4>4.2. Uso del veicolo</h4>
                                    <ul>
                                        <li>Ti impegni a guidare il veicolo “da buon padre”.</li>
                                        <li>Ti impegni a utilizzare il veicolo solo su strade carrabili
                                            asfalto a meno che non si tratti di un 4x4, con conseguenti eventuali danni causati al veicolo
                                            il mancato rispetto di questa clausola rimarrà a carico dell'inquilino e le spese di
                                            la riparazione non coperta da assicurazione sarà a suo carico.</li>
                                        <li>È vietato utilizzare il veicolo al di fuori del territorio marocchino senza a
                                            autorizzazione scritta da noi rilasciata.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>5. Pagamento </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Per qualsiasi prenotazione effettuata sul nostro sito, ti verrà chiesto di pagare online a
                                        cauzione, il resto pagherai alla consegna dell'auto in contanti o tramite
                                        carta di credito, invece, ad eccezione di una consegna all'interno della nostra agenzia
                                        è necessario avvisarci via e-mail o telefono se si desidera pagare con carta
                                        pianificare di portare il terminale di pagamento.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>6. Assicurazione / Responsabilità in caso di danni </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Tutti i nostri veicoli sono completamente assicurati, tuttavia una franchigia del 10% e a
                                        la responsabilità del cliente in caso di sua responsabilità parziale o totale.
                                    </p>
                                    <p> Ti ricordiamo che non è possibile alcun ricorso all'assicurazione nel caso in cui il
                                        l'inquilino non ci presenta un rapporto amichevole o un rapporto di polizia
                                        o carattere.</p>
                                    <p>In caso di smarrimento/furto del veicolo, accessorio o danneggiamento dello stesso
                                        per colpa del cliente, o in assenza di colpa di un terzo sfavorevole (sinistro
                                        accidentale, durante il parcheggio, collisione con un animale che attraversa la strada,
                                        carrello, macchina non automobilistica, ecc.), il cliente deve fare una dichiarazione specificando
                                        le cause e le circostanze, e ci indennizzerà fino alla franchigia.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>7. Emendamento</h3>
                            </a>

                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>La modifica presso l'auto Jacaranda è gratuita prima del ritiro del veicolo
                                    </p>
                                    <h4>7.1. Modifica prima del ritiro del veicolo </h4>
                                    <p> Eventuali modifiche devono essere apportate tramite l'area clienti o via email
                                        info@jacarandacar.com entro un termine non superiore alle 12 ore prima della presa in carico
                                        carico del veicolo.
                                        N.B: Ci riserviamo il diritto di accettare o rifiutare questa modifica secondo
                                        l'orario del veicolo oggetto di modifica.

                                        Se accettiamo la modifica, un nuovo voucher deve essere disponibile su
                                        tua area clienti, devi stamparlo e presentarlo il giorno della consegna a
                                        nostro agente.
                                        Se rifiutiamo la modifica, le condizioni iniziali della prenotazione rimangono
                                        valido così come il voucher.
                                    </p>
                                    <h4>7.2. Modifica dopo il ritiro del veicolo </h4>
                                    <p>Se desideri modificare o estendere il tuo noleggio, dovrai avere il nostro
                                        previo accordo, una volta ottenuto questo accordo è necessario rivolgersi al ns
                                        agency di procedere alla modifica del contratto e procedere, in caso di
                                        dilazione al pagamento dell'importo del canone aggiuntivo.
                                        Nel caso in cui sia difficile per te venire nella nostra agenzia, una copia
                                        del contratto di estensione ti verrà inviato via email o fax.</p>
                                    <h4>7.3. Ritorno anticipato</h4>
                                    <p>Previa presa in carico del veicolo e sottoscrizione del contratto di noleggio, l'eventuale
                                        la riconsegna anticipata del veicolo non può dar luogo al rimborso dell'importo
                                        giorni di noleggio non utilizzati, tuttavia hai diritto ad un credito nominativo pari
                                        il numero rimanente di giorni.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>8. Annullamento e mancato supporto del veicolo </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">

                                    <p>Puoi cancellare la tua prenotazione fino all'ultimo minuto prima dell'orario di check-in.
                                        presa in carico del veicolo senza motivo o prova.

                                        La tabella seguente descrive le spese di elaborazione addebitate al rimborso:
                                    </p>
                                    <table border="1" cellpadding="0" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td style="height:63px; width:358px">
                                                    <p><b>Annullamento entro più di 48 ore prima del ritiro
                                                        del veicolo.</b></p>
                                                </td>
                                                <td style="height:63px; width:198px">
                                                    <p><b>Rimborso completo</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:56px; width:358px">
                                                    <p><b>Annullamento entro meno di 48 ore prima del ritiro
                                                        del veicolo.</b></p>
                                                </td>
                                                <td style="height:56px; width:198px">
                                                    <p><b>50% dell'importo del deposito versato online.</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:108px; width:358px">
                                                    <p><b>Caso di annullamento da parte del cliente dopo l'orario di ritiro
                                                        indicato sul voucher,<br>
                                                        Caso di mancata presentazione,<br>
                                                        Casi di presentazione tardiva,<br>
                                                        caso di mancato rispetto delle condizioni di noleggio (mancata presentazione
                                                        di tutti i documenti, problema con la carta di credito...)</b></p>
                                                </td>
                                                <td style="height:108px; width:198px">
                                                    <p><b>Nessun rimborso.</b></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Ricordiamo che queste percentuali si applicano all'acconto versato online quando
                                        della prenotazione e non sull'importo totale del noleggio, questo deposito è
                                        circa il 20% del costo totale del noleggio.
                                        Per evitare queste spese di cancellazione, ti offriamo la possibilità di ottenere a
                                        hanno una durata di 2 anni, pari al valore della caparra versata online.
                                        Il credito può essere utilizzato su qualsiasi autonoleggio con Jacaranda perché, per
                                        solo telefono.
                                        Questo bene è nominativo, non trasferibile e non trasferibile, oltre i 2 anni il suo valore
                                        è pari a zero e l'importo corrispondente incassato da Jacaranda perché poi rimanga nostro
                                        proprietà</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>9. Valutare</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Il "Costo totale del noleggio" comunicato nella pagina di dettaglio della prenotazione, è
                                        quello che avresti effettivamente pagato, non ci saranno sorprese il giorno del
                                        consegna.
                                        Il pagamento viene effettuato in due rate, un acconto da versare immediatamente online e il
                                        il resto verrà pagato il giorno del ritiro dell'auto presso l'agente incaricato
                                        consegna.</p>
                                    <h4>9.1 Cosa è incluso nel prezzo</h4>
                                    <div class="contentConditions2" style="display: block;">
                                        <p><b>=> </b>Un pacchetto di un numero di&nbsp; giorno limitato calcolato in incrementi di 24 ore
                                            è a chilometraggio illimitato.</p>

                                        <p><b>=> </b>T.V.A.</p>

                                        <p><b>=> </b>Assicurazione contro tutti i rischi con franchigia irredimibile del 10%.
                                        </p>

                                        <p><b>=></b>Assicurazione per le persone trasportate, per furto e per
                                            il fuoco.</p>

                                        <p><b>=> </b>Assicurazione danni con franchigia del 10%.</p>

                                        <p><b>=> </b>Il secondo conduttore.</p>

                                        <p><b>=> </b>Assistenza 24 ore su 24, 7 giorni su 7.</p>

                                        <p><b>=> </b>Consegna e recupero del veicolo nel luogo e nella città prescelta dal
                                            cliente al momento della prenotazione.</p>
                                    </div>
                                    <h4>9.2 Cosa non è compreso nel prezzo </h4>
                                    <p>La multa è biglietto:
                                        Il cliente rimane l'unico responsabile per multe, multe e verbali
                                        stabilito contro di lui, se non si libera delle ammende che ha
                                        l'oggetto durante il suo soggiorno, avremo il diritto di esigere il pagamento di tali sanzioni.
                                        Se riceviamo multe dopo la partenza del cliente, ci riserviamo il diritto
                                        fornire alla polizia o alla gendarmeria tutte le informazioni necessarie
                                        relative al cliente responsabile di tali sanzioni.
                                        In caso di traino dell'auto alla sterlina a causa di un cattivo
                                        parcheggio del cliente o parcheggio in un'area vietata, o qualsiasi
                                        altra causa derivante da negligenza del conduttore, solo il cliente è responsabile
                                        procedere all'uscita del veicolo dal canile pagando le multe e
                                        espletamento di tutti gli adempimenti amministrativi necessari all'ottenimento del buono
                                        uscita.
                                        Tuttavia, possiamo impegnarci a svolgere questi compiti e ottenere il diritto di
                                        uscita soggetta a spese condominiali che saranno fatturate al cliente in aggiunta al
                                        prezzo delle multe generate, in questo caso è necessaria la presenza del cliente al
                                        quando si esce dal veicolo.</p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>10. Prenotazione </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Il processo di prenotazione presso Jacaranda car è molto semplice, le auto
                                        visualizzate nei risultati della ricerca sono effettivamente disponibili.
                                        La tua auto è garantita dal momento in cui procedi al pagamento della tua
                                        prenotazione e ricevi il Voucher, nessuna cancellazione da parte nostra è possibile.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>11. Protezione della privacy</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Durante il processo di prenotazione, ti chiederemo di farlo
                                        fornire informazioni, alcune sono obbligatorie (indicate da un asterisco
                                        sul nostro sito Web) perché sono essenziali per il trattamento dei tuoi dati
                                        prenotazione, altri sono facoltativi che ci aiuteranno a servirti meglio, questi
                                        le informazioni non saranno in alcun modo trasmesse a terzi.
                                        Puoi modificare queste informazioni accedendo al tuo
                                        area clienti, nel caso in cui desideri eliminare il tuo account di cui hai bisogno
                                        invia una richiesta solo tramite l'indirizzo email utilizzato per creare il tuo account a
                                        il seguente indirizzo email: info@jacarandacar.com
                                        I dati della tua carta bancaria utilizzata per il pagamento del tuo
                                        prenotazione non vengono in alcun momento comunicate, né memorizzate, né trasmesse
                                        del processo su jacarandacar.com
                                        La parte di pagamento del processo di prenotazione viene effettuata presso un centro di
                                        pagamento sicuro.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                </main>

            </div>
        @elseif(Session::get('language') == 'pl')
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>1. Przedmowa</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Klient lub Najemca przyznaje, że przed dokonaniem rezerwacji zapoznał się z wszystkimi niniejszymi warunkami oraz dodatkowo uznaje, że ma zdolność do zawarcia niniejszej umowy.</p>
                                    <p>
                                        Niniejsze Ogólne Warunki Sprzedaży regulują wszystkie transakcje dokonywane za pośrednictwem katalogu internetowego firmy Jacaranda, ponieważ złożenie zamówienia na tej stronie wymaga bezwarunkowej i nieodwołalnej akceptacji tych warunków przez klienta. Jeśli Klient lub Najemca nie akceptuje tych Warunków, powinien w konsekwencji odmówić ich i przerwać proces rezerwacji. W przeciwnym razie Klient lub Najemca potwierdza, że przeczytał i zrozumiał niniejsze Warunki oraz je akceptuje.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>2. Warunki do spełnienia przy wynajmie. </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Musisz dostarczyć nam przy odbiorze pojazdu, wraz z dokumentami i oryginałami:
                                    <ul>
                                        <li> Ważne prawo jazdy, co najmniej od 24 miesięcy.</li>
                                        <li> Paszport.</li>
                                        <li> Środek płatniczy (karta kredytowa, gotówka itp.).</li>
                                        <li> Nie zatrzymujemy oryginałów tych dokumentów.</li>
                                        <li> Każdy kierowca musi mieć co najmniej 23 lata i musi posiadać ważne prawo jazdy co najmniej od 24 miesięcy.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>3. Czas wynajmu/ Przedłużenie </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>3.1. Sposób obliczenia</h4>
                                    <p>Czas wynajmu jest liczony w 24-godzinnych okresach, niepodzielny, od godziny odbioru pojazdu. Jednakże, korzystasz z tolerancji 3 godzin, po których stosowany jest nowy okres 24 godzin.
                                    </p>
                                    <p>Jeśli chcesz przedłużyć wynajem, musisz uzyskać nasze wcześniejsze
                                        zezwolenie. Po uzyskaniu zgody musisz udać się do naszego biura, aby
                                        dokonać odnowienia umowy i uregulować dodatkową opłatę za wynajem.
                                    </p>
                                    <p>Jeśli ciężko Ci będzie udać się do naszego biura, kopia
                                        umowy przedłużenia zostanie wysłana do Ciebie e-mailem lub faksem.
                                    </p>
                                    <p>W przypadku dostawy lub zwrotu poza Marrakeszem, minimalny okres wynajmu musi
                                        wynosić co najmniej 7 dni.</p>
                                    <h4>3.2. Zakończenie wynajmu </h4>
                                    <p>Wynajem uznaje się za zakończony w momencie zwrotu kluczy i
                                        dokumentów samochodu naszemu przedstawicielowi.
                                        W przypadku zwrotu pojazdu bez dokumentów lub kluczy, klientowi zostaną
                                        naliczone opłaty za duplikaty.
                                        W żadnym wypadku nie ponosimy odpowiedzialności za rzeczy, które mogły zostać
                                        pozostawione w pojazdach po zakończeniu wynajmu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>4. Pojazd</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>4.1. Stan pojazdu </h4>
                                    <p>Otrzymasz pojazd w pełni sprawny i czysty. Przed wyjazdem z miejsca dostawy należy sprawdzić, czy wszystkie widoczne uszkodzenia pojazdu są odnotowane w umowie najmu. W przeciwnym razie wszelkie widoczne uszkodzenia nie odnotowane w umowie najmu przy wyjeździe z miejsca dostawy nie będą brane pod uwagę i spowodują koszty naprawy poniesione przez najemcę do wysokości udziału własnego. Wyjątek stanowi sytuacja, gdy wcześniej dostarczono do naszego działu ds. likwidacji szkód protokół o zdarzeniu losowym, w którym określono, że nie jesteście Państwo winni. (Zobacz sekcję dotyczącą odpowiedzialności za szkody)</p>
                                    <h4>4.2. Użytkowanie pojazdu</h4>
                                    <ul>
                                        <li>Zobowiązujesz się prowadzić pojazd "jak dobry ojciec rodziny".</li>
                                        <li>Zobowiązujesz się poruszać pojazdem tylko po utwardzonych drogach, z wyjątkiem terenowych pojazdów 4x4. Wszelkie szkody spowodowane nieprzestrzeganiem tego postanowienia pozostają w gestii najemcy, a koszty napraw nieobjęte ubezpieczeniem zostaną mu obciążone.</li>
                                        <li>Zabrania się używania pojazdu poza terytorium Maroka bez pisemnej zgody wydanej przez nas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>5. Płatność</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Dla każdej rezerwacji dokonanej na naszej stronie, zostaniesz poproszony(-a) o dokonanie płatności online zaliczki, resztę zapłacisz przy odbiorze samochodu gotówką lub kartą kredytową. Jednakże, z wyjątkiem dostawy w naszym oddziale, prosimy o poinformowanie nas mailowo lub telefonicznie, jeśli chcesz zapłacić kartą, abyśmy mogli przygotować terminal płatniczy.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>6. Ubezpieczenie / Odpowiedzialność za szkody </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Wszystkie nasze pojazdy są ubezpieczone na zasadzie pełnego ryzyka, jednakże klient ponosi franczyzę w wysokości 10% w przypadku częściowego lub całkowitego zaangażowania jego odpowiedzialności.</p>
                                    <p>Przypominamy, że w przypadku gdy najemca nie przedstawi nam protokołu zgodnego lub protokołu policyjnego, nie będzie możliwe skorzystanie z ubezpieczenia.</p>
                                    <p>W przypadku utraty/zagubienia pojazdu, akcesoriów lub uszkodzeń wyrządzonych przez klienta, lub w przypadku braku winy ze strony trzeciej strony (przypadkowe zdarzenie, podczas parkowania, kolizja z przewijającym się zwierzęciem, wózkiem, urządzeniem nie będącym pojazdem), klient jest zobowiązany zgłosić to zdarzenie wskazując jego przyczyny i okoliczności oraz zrekompensować nam koszty do wysokości ustalonej franczyzy.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>7. Modyfikacja</h3>
                            </a>

                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Zmiana w Jacaranda car jest bezpłatna przed odebraniem pojazdu.
                                    </p>
                                    <h4>7.1. Modyfikacja przed odebraniem pojazdu </h4>
                                    <p>Każda modyfikacja powinna być dokonana za pośrednictwem konta klienta lub za pośrednictwem poczty elektronicznej na adres info@jacarandacar.com w ciągu maksymalnie 12 godzin przed odbiorem pojazdu.
                                        N.B: Zastrzegamy sobie prawo do akceptacji lub odmowy takiej modyfikacji w zależności od harmonogramu pojazdu podlegającego modyfikacji.
                                        Jeśli akceptujemy modyfikację, nowy bon powinien być dostępny w Państwa koncie klienta, należy go wydrukować i przedstawić w dniu dostawy naszemu przedstawicielowi.
                                        Jeśli odrzucamy modyfikację, obowiązują warunki początkowe rezerwacji oraz bon.</p>
                                    <h4>7.2. Modyfikacja po odebraniu pojazdu </h4>
                                    <p>Jeśli chcą Państwo zmodyfikować lub przedłużyć wynajem, konieczne będzie uzyskanie wcześniejszej zgody naszej firmy; po uzyskaniu tej zgody należy udać się do naszego biura w celu dokonania zmiany umowy i, w przypadku przedłużenia, uregulowania dodatkowej opłaty najmu.
                                        W przypadku trudności w dotarciu do naszego biura, kopia umowy przedłużenia zostanie wysłana drogą elektroniczną lub faksem.</p>
                                    <h4>7.3. Zwrot przedterminowy</h4>
                                    <p>Po odebraniu pojazdu i podpisaniu umowy najmu, każdy przedterminowy zwrot pojazdu nie będzie uprawniał do zwrotu opłaty za nieużyte dni najmu, jednakże przysługuje Państwu upoważnienie w postaci nominalnej równoważnej liczbie pozostałych dni.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>8. Anulacja i nieodebranie pojazdu</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">

                                    <p>Możesz anulować swoją rezerwację do ostatniej minuty przed czasem odbioru pojazdu bez podania przyczyny ani uzasadnienia.

                                    Poniższa tabela opisuje opłaty manipulacyjne, które zostaną potrącone z Twojego zwrotu:
                                    </p>
                                    <table border="1" cellpadding="0" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td style="height:63px; width:358px">
                                                    <p><b>Anulowanie z ponad 48-godzinnym wyprzedzeniem przed odbiorem pojazdu.</b></p>
                                                </td>
                                                <td style="height:63px; width:198px">
                                                    <p><b>Pełny zwrot</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:56px; width:358px">
                                                    <p><b>Anulowanie w ciągu mniej niż 48 godzin przed odbiorem pojazdu.</b></p>
                                                </td>
                                                <td style="height:56px; width:198px">
                                                    <p><b>50% wartości zadatku opłaconego online./b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:108px; width:358px">
                                                    <p><b>Przypadek anulowania przez klienta po czasie rozpoczęcia usługi
                                                    podanym na kuponie,<br>
                                                    Przypadek nieobecności,<br>
                                                    Przypadek opóźnienia przybycia,<br>
                                                    Przypadek nieprzestrzegania warunków wynajmu (brak dostarczenia
                                                    wszystkich dokumentów, problem z kartą kredytową…)</b></p>
                                                </td>
                                                <td style="height:108px; width:198px">
                                                    <p><b>Brak zwrotów.</b></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Przypominamy, że te procenty stosują się do zadatku zapłaconego online podczas rezerwacji, a nie do całkowitej kwoty wynajmu. Zadatek ten wynosi około 20% całkowitej kwoty wynajmu. Aby uniknąć opłat za anulowanie, oferujemy możliwość otrzymania kredytu w wysokości zadatku zapłaconego online, ważnego przez 2 lata. Kredyt ten można wykorzystać na wynajem samochodu w Jacaranda Car, wyłącznie telefonicznie. Kredyt ten jest imienny, niepodzielny i nieprzekazywalny. Po upływie 2 lat jego wartość ulega zerwaniu, a kwota odpowiadająca kredytowi pozostaje wtedy własnością Jacaranda Car.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>9. Opłata</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Całkowity koszt wynajmu podany na stronie szczegółów rezerwacji jest tym, który faktycznie zapłacisz, nie będzie żadnych niespodzianek w dniu dostawy. Płatność dokonywana jest w dwóch ratach - zaliczka płatna online natychmiast, a reszta płatna w dniu odbioru samochodu u osoby odpowiedzialnej za dostawę.</p>
                                    <h4>9.1 Co zawiera cena</h4>
                                    <div class="contentConditions2" style="display: block;">
                                        <p><b>=> </b>Pakiet o ograniczonej liczbie dni, obliczany w przedziałach 24 godzin, z nieograniczoną liczbą kilometrów.</p>
                                        <p><b>=> </b>Podatek VAT.</p>
                                        <p><b>=> </b>Ubezpieczenie pełne, z odliczalnym udziałem własnym w wysokości 10%.</p>
                                        <p><b>=> </b>Ubezpieczenie osób przewożonych, od kradzieży i od ognia.</p>
                                        <p><b>=> </b>Ubezpieczenie od stłuczek szyb, z odliczalnym udziałem własnym w wysokości 10%.</p>
                                        <p><b>=> </b>Drugiego kierowcę.</p>
                                        <p><b>=> </b>Pomoc drogowa 24/7.</p>
                                        <p><b>=> </b>Dostawę i odbiór pojazdu w miejscu i mieście wybranym przez klienta podczas rezerwacji.</p>
                                        </div>
                                        <h4>9.2 Co nie jest wliczone w cenę </h4>
                                        <p>Kary i mandaty:
                                        Klient pozostaje samodzielnie odpowiedzialny za kary, mandaty i protokoły przeciwko niemu skierowane. Jeśli klient nie ureguluje kar, na które został nałożony podczas pobytu, będziemy uprawnieni do żądania ich zapłaty. Jeśli otrzymamy mandaty po wyjeździe klienta, zastrzegamy sobie prawo udzielenia policji lub żandarmerii wszystkich niezbędnych informacji dotyczących klienta odpowiedzialnego za te mandaty.
                                        W przypadku odholowania samochodu na parking strzeżony z powodu złego parkowania klienta lub parkowania w strefie zakazanej lub z innych przyczyn wynikających z zaniedbania najemcy, tylko klient jest odpowiedzialny za wyjście pojazdu z parkingu, opłacając kary i dokonując wszelkich niezbędnych formalności administracyjnych w celu uzyskania dokumentu wyjazdowego.
                                        Jednakże możemy podjąć się tych formalności i uzyskać dokument wyjazdowy za opłatą usługową, która zostanie doliczona do ceny poniesionych kar, w tym przypadku obecność klienta jest wymagana w momencie wyjazdu pojazdu.</p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>10. Rezerwacja </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Proces rezerwacji w Jacaranda car jest bardzo prosty, samochody
                                        wyświetlane w wynikach wyszukiwania są rzeczywiście dostępne.
                                        Twój samochód jest gwarantowany od momentu dokonania płatności za
                                        rezerwację i otrzymania Vouchera, nie ma możliwości anulacji z naszej strony.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>11. Ochrona prywatności</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>W trakcie procesu rezerwacji będziemy proszeni o podanie nam informacji, niektóre z nich są obowiązkowe (oznaczone gwiazdką na naszej stronie internetowej), ponieważ są one niezbędne do przetworzenia Państwa rezerwacji, inne są opcjonalne i pomogą nam lepiej Państwu służyć. Te informacje w żadnym przypadku nie zostaną udostępnione osobom trzecim. Mają Państwo możliwość zmiany tych informacji, logując się do swojego konta klienta. Jeśli chcą Państwo usunąć swoje konto, wystarczy wysłać żądanie na adres e-mail używany do utworzenia konta na następujący adres e-mail: info@jacarandacar.com. Informacje dotyczące Państwa karty kredytowej używanej do dokonania płatności za rezerwację nie są przekazywane, przechowywane ani transmitowane na żadnym etapie procesu na jacarandacar.com. Część płatności w procesie rezerwacji odbywa się w bezpiecznym centrum płatności.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </main>

            </div>
        @elseif(Session::get('language') == 'nl')
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>1. Inleiding</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>De Klant of Huurder erkent dat hij, voorafgaand aan zijn reservering, kennis heeft genomen van alle hierna volgende voorwaarden en hij erkent bovendien, dat hij de bekwaamheid heeft om onderhavig contract af te sluiten.</p>
                                    <p>De volgende algemene verkoopvoorwaarden regelen alle transacties die worden uitgevoerd via de webcatalogus van Jacaranda Car, elke bestelling geplaatst op deze site houdt in dat de klant zijn onvoorwaardelijke en onherroepelijke aanvaarding van deze voorwaarden impliceert. Indien de Klant of Huurder deze Voorwaarden niet aanvaardt, zal hij deze automatisch weigeren en het reserveringsproces moeten onderbreken. Anders erkent de Klant of Huurder dat hij deze Voorwaarden heeft gelezen, begrepen en aanvaard.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>2. Voorwaarden om te huren</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>U moet ons bij de aflevering van het voertuig voorzien van bewijsstukken en originele documenten:
                                    <ul>
                                        <li> Een geldig rijbewijs, sinds minstens 24 maanden.</li>
                                        <li> Een paspoort.</li>
                                        <li> Een betaalmiddel (creditcard, contant geld, etc.)</li>
                                        <li> We bewaren de originele documenten niet.</li>
                                        <li> Elke bestuurder moet minstens 23 jaar oud zijn en in het bezit zijn van een geldig rijbewijs,
                                            sinds minstens 24 maanden.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>3. Huurperiode / Verlenging</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>3.1. Berekeningsmethode</h4>
                                    <p>De huurperiode wordt berekend per blok van 24 uur, niet opdeelbaar, vanaf het moment van
                                        overname van het voertuig. U krijgt echter een tolerantie van 3 uur waarbinnen een nieuwe periode
                                        van 24 uur wordt toegepast.</p>
                                    <p>Indien u uw huurperiode wenst te verlengen, heeft u voorafgaande toestemming van ons nodig.
                                        Zodra u deze toestemming heeft, dient u naar ons kantoor te gaan om het contract te
                                        verlengen en het bedrag van de extra huur te betalen.</p>
                                    <p>Indien het voor u moeilijk is om naar ons kantoor te komen, wordt een kopie van het
                                        verlengingscontract per e-mail of per fax naar u verzonden.</p>
                                    <p>Voor alle leveringen of retourzendingen buiten Marrakech moet de minimale huurperiode
                                        gelijk zijn aan of langer zijn dan 7 dagen.</p>
                                    <h4>3.2. Einde van de huur</h4>
                                    <p>De huur wordt beschouwd als beëindigd op het moment dat de sleutels en papieren van de
                                        auto aan onze agent worden teruggegeven. In het geval dat het voertuig wordt
                                        teruggegeven zonder sleutels of papieren, worden er kosten voor duplicaten in rekening
                                        gebracht bij de klant. Wij kunnen op geen enkele manier aansprakelijk worden gesteld
                                        voor eigendommen die in voertuigen zijn achtergelaten na afloop van de huurperiode.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>4. Het voertuig </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>4.1. Staat van het voertuig </h4>
                                    <p>U ontvangt een voertuig dat in goede staat verkeert en schoon is. U moet ervoor zorgen dat eventuele zichtbare gebreken aan het voertuig voor uw vertrek vanaf de afleverlocatie worden vermeld op het verhuurcontract. Indien dit niet gebeurt, worden eventuele zichtbare schade die niet is vermeld op het verhuurcontract bij het vertrek van het voertuig niet beschouwd en zullen reparatiekosten voor uw rekening komen tot aan het eigen risico.
                                        Tenzij u eerder een schadeclaim hebt ingediend bij onze schadeservice waarin staat dat u niet aansprakelijk bent. (Zie verantwoordelijkheidssectie in geval van schade)</p>
                                    <h4>4.2. Gebruik van het voertuig</h4>
                                    <ul>
                                        <li>U verbindt zich ertoe het voertuig "als een goed huisvader" te besturen.</li>
                                        <li>U verbindt zich ertoe het voertuig alleen op verharde wegen te gebruiken, tenzij het een 4x4 is. Eventuele schade aan het voertuig als gevolg van het niet naleven van deze clausule komt voor rekening van de huurder, en reparatiekosten die niet door de verzekering worden gedekt, zullen aan hem worden doorberekend.</li>
                                        <li>Het is verboden het voertuig buiten het Marokkaanse grondgebied te gebruiken zonder schriftelijke toestemming van ons.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>5. Betaling</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Voor elke reservering die via onze website wordt gedaan, wordt u gevraagd om online een aanbetaling te doen. Het resterende bedrag kunt u bij aflevering van de auto contant of met een bankpas betalen. Als u echter niet bij ons kantoor wilt afleveren, moet u ons per e-mail of telefonisch op de hoogte stellen als u met een kaart wilt betalen, zodat we het betalingsterminal kunnen meenemen.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>6. Verzekering / Aansprakelijkheid bij schade</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Al onze voertuigen zijn volledig verzekerd, maar er geldt een eigen risico van 10% voor de klant als zijn gedeeltelijke of volledige verantwoordelijkheid betrokken is.</p>
                                    <p>Wij herinneren u eraan dat er geen beroep op de verzekering mogelijk is als de huurder ons geen schadeformulier of een politieverslag overlegt.</p>
                                    <p>In geval van verlies/diefstal van het voertuig, accessoires of schade veroorzaakt door de klant, of in het geval van afwezigheid van schuld van een tegenpartij (toevallig ongeval, tijdens het parkeren, botsing met een dier op de weg, kruiwagen, niet-automatisch apparaat, ...), moet de klant een verklaring afleggen waarin de oorzaken en omstandigheden worden vermeld, en ons vergoeden tot aan het eigen risico.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>7. Wijziging</h3>
                            </a>

                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Wijziging bij Jacaranda car is gratis vóór het ophalen van het voertuig.</p>
                                    <h4>7.1. Wijziging vóór het ophalen van het voertuig</h4>
                                    <p>Alle wijzigingen moeten worden gedaan via het klantenportaal, of per e-mail naar info@jacarandacar.com, uiterlijk 12 uur vóór het ophalen van het voertuig.
                                        N.B.: We behouden ons het recht voor om deze wijziging al dan niet te accepteren op basis van de planning van het voertuig waarop de wijziging betrekking heeft.
                                        Als we de wijziging accepteren, moet er een nieuwe voucher beschikbaar zijn in uw klantenportaal, die u moet afdrukken en bij de levering aan onze vertegenwoordiger moet overhandigen.
                                        Als we de wijziging weigeren, blijven de oorspronkelijke reserveringsvoorwaarden en de voucher geldig.</p>
                                    <h4>7.2. Wijziging na het ophalen van het voertuig</h4>
                                    <p>Als u uw huur wilt wijzigen of verlengen, heeft u onze voorafgaande goedkeuring nodig. Zodra u deze goedkeuring heeft, moet u naar ons kantoor gaan om het contract te wijzigen en, in geval van verlenging, het bedrag van de extra huur te betalen.
                                        Als het moeilijk voor u is om naar ons kantoor te komen, wordt een kopie van het verlengingscontract per e-mail of fax naar u verzonden.</p>
                                    <h4>7.3. Vroegtijdige terugkeer</h4>
                                    <p>Nadat het voertuig is opgehaald en het huurcontract is ondertekend, geeft een vroegtijdige terugkeer van het voertuig geen recht op restitutie van ongebruikte huurdagen. U heeft echter recht op een tegoedbon voor het aantal resterende dagen.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>8. Annulering en niet-ophalen van de auto</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">

                                    <p>U kunt uw reservering annuleren tot het laatste moment voor het ophalen van de auto, zonder reden of rechtvaardiging.

                                        Hieronder vindt u de administratiekosten die in rekening worden gebracht bij uw terugbetaling:
                                    </p>
                                    <table border="1" cellpadding="0" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td style="height:63px; width:358px">
                                                    <p><b>Annulering meer dan 48 uur voor het ophalen van de auto.</b></p>
                                                </td>
                                                <td style="height:63px; width:198px">
                                                    <p><b>Volledige terugbetaling</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:56px; width:358px">
                                                    <p><b>Annulering minder dan 48 uur voor het ophalen van de auto.</b></p>
                                                </td>
                                                <td style="height:56px; width:198px">
                                                    <p><b>50% van het online betaalde aanbetalingsbedrag.</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:108px; width:358px">
                                                    <p><b>Annuleringsgevallen door de klant na het op de voucher vermelde ophaaltijdstip,<br>
                                                            Niet verschijnen,<br>
                                                            Laatkomen,<br>
                                                            Niet voldoen aan de verhuurvoorwaarden (niet alle documenten tonen, probleem met creditcard…)</b></p>
                                                </td>
                                                <td style="height:108px; width:198px">
                                                    <p><b>Geen terugbetaling.</b></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Wij herinneren u eraan dat deze percentages van toepassing zijn op de online betaalde aanbetaling bij het reserveren en niet op het totale huurbedrag. Deze aanbetaling bedraagt ongeveer 20% van de totale huurprijs.
                                        Om deze annuleringskosten te vermijden, bieden wij u de mogelijkheid om een tegoedbon te krijgen met een geldigheidsduur van 2 jaar, ter waarde van de online betaalde aanbetaling.
                                        De tegoedbon kan worden gebruikt voor elke autoverhuur bij Jacaranda Car, alleen telefonisch.
                                        De tegoedbon is persoonlijk, niet overdraagbaar en niet overdraagbaar. Na 2 jaar vervalt de waarde ervan en blijft het bij Jacaranda Car geïnde bedrag ons eigendom.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>9. Tarief</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>De "Totale huurkosten" die op de detailpagina van de reservering wordt vermeld, is het bedrag dat u daadwerkelijk zult betalen, er zullen geen verrassingen zijn op de dag van levering.
                                        De betaling gebeurt in twee termijnen, een aanbetaling die online wordt betaald bij het boeken, en de rest wordt betaald op de dag dat u de auto ophaalt bij de agent die belast is met de levering.</p>
                                    <h4>9.1 Wat is inbegrepen in de prijs</h4>
                                    <div class="contentConditions2" style="display: block;">
                                        <p><b>=> </b>Een pakket met een beperkt aantal dagen, berekend in stappen van 24 uur, met onbeperkte kilometers.</p>

                                        <p><b>=> </b>Btw.</p>

                                        <p><b>=> </b>Een allriskverzekering met een niet-afkoopbaar eigen risico van 10%.</p>

                                        <p><b>=> </b>Een verzekering voor inzittenden, diefstal- en brandverzekering.</p>

                                        <p><b>=> </b>Een ruitbreukverzekering met een eigen risico van 10%.</p>

                                        <p><b>=> </b>De tweede bestuurder.</p>

                                        <p><b>=> </b>24/7 pechhulp.</p>

                                        <p><b>=> </b>Levering en ophalen van het voertuig op de plaats en stad die door de klant zijn gekozen bij het reserveren.</p>
                                    </div>
                                    <h4>9.2 Wat is niet inbegrepen in de prijs</h4>
                                    <p>Boetes en overtredingen:
                                        De klant blijft alleen verantwoordelijk voor boetes, overtredingen en boetes die tegen hem zijn opgelegd. Als hij zich niet ontlast van de boetes waaraan hij tijdens zijn verblijf is onderworpen, hebben wij het recht om betaling van deze boetes te eisen. Als we boetes ontvangen na het vertrek van de klant, behouden we ons het recht voor om de politie of gendarmerie alle noodzakelijke informatie te verstrekken met betrekking tot de klant die verantwoordelijk is voor deze boetes.
                                        In het geval van het wegslepen van de auto naar de pound vanwege verkeerd parkeren door de klant of parkeren in een verboden zone, of enige andere reden als gevolg van nalatigheid van de huurder, is alleen de klant verantwoordelijk voor het vrijmaken van het voertuig uit de pound door de boetes te betalen en alle administratieve taken uit te voeren die nodig zijn om de vrijgavebon te verkrijgen.
                                        Wij kunnen echter deze taken op ons nemen en de vrijgavebon verkrijgen tegen een servicekosten die aan de klant in rekening worden gebracht bovenop de kosten van de boetes, in dat geval is de aanwezigheid van de klant vereist op het moment van de vrijlating van het voertuig.</p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>10. Reservering </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Het reserveringsproces bij Jacaranda Car is uiterst eenvoudig. De auto's die worden weergegeven in de zoekresultaten zijn daadwerkelijk beschikbaar. Uw auto is gegarandeerd vanaf het moment dat u de betaling voor uw reservering verricht en de Voucher ontvangt; annulering van onze kant is niet mogelijk.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>11. Privacybescherming</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Tijdens het reserveringsproces zullen wij u vragen om ons informatie te verstrekken, sommige zijn verplicht (aangeduid met een asterisk op onze website) omdat ze essentieel zijn voor de verwerking van uw reservering, andere zijn optioneel en zullen ons helpen u beter van dienst te zijn, deze informatie wordt op geen enkele manier aan derden doorgegeven. U heeft de mogelijkheid om deze informatie te wijzigen door in te loggen op uw klantenaccount, als u uw account wilt verwijderen, hoeft u alleen maar een verzoek te sturen via het e-mailadres dat is gebruikt om uw account aan te maken naar het volgende e-mailadres: info@jacarandacar.com. De informatie van uw betaalkaart die is gebruikt voor de betaling van uw reservering wordt op geen enkel moment gecommuniceerd, opgeslagen of doorgegeven tijdens het proces op jacarandacar.com. Het betalingsgedeelte van het reserveringsproces wordt afgehandeld bij een beveiligd betalingscentrum.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </main>

            </div>
        @elseif(Session::get('language') == 'pt')
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#read">
                                <h3>1. Introdução</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>O Cliente ou Locatário reconhece que, antes de fazer sua reserva, ele tomou conhecimento de todos os seguintes termos e reconhece também que tem a capacidade de celebrar este contrato.</p>
                                    <p>Os seguintes termos e condições gerais de venda regulam todas as transações realizadas através do catálogo online da Jacaranda Car, qualquer pedido feito neste site implica na aceitação incondicional e irrevogável desses termos pelo cliente. Se o Cliente ou Locatário não aceitar estes Termos, ele deverá automaticamente recusá-los e interromper o processo de reserva. Caso contrário, o Cliente ou Locatário reconhece que leu, compreendeu e aceitou estes Termos.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#custom">
                                <h3>2. Condições para alugar</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Você deve nos fornecer os seguintes documentos originais na entrega do veículo:
                                        <ul>
                                            <li> Uma carteira de motorista válida, por pelo menos 24 meses.</li>
                                            <li> Um passaporte.</li>
                                            <li> Um meio de pagamento (cartão de crédito, dinheiro, etc.)</li>
                                            <li> Não retemos os documentos originais.</li>
                                            <li> Cada motorista deve ter pelo menos 23 anos de idade e possuir uma carteira de motorista válida,
                                                por pelo menos 24 meses.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#custom">
                                <h3>3. Período de aluguel / Extensão</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>3.1. Método de cálculo</h4>
                                    <p>O período de aluguel é calculado em blocos de 24 horas, indivisíveis, a partir do momento em que o veículo é retirado. No entanto, você terá uma tolerância de 3 horas dentro das quais um novo período de 24 horas será aplicado.</p>
                                    <p>Se desejar estender seu período de aluguel, precisará da nossa aprovação prévia. Uma vez obtida essa aprovação, você deve ir ao nosso escritório para estender o contrato e pagar o valor do aluguel adicional.</p>
                                    <p>Se for difícil para você ir ao nosso escritório, uma cópia do contrato de extensão será enviada por e-mail ou fax.</p>
                                    <p>Para todas as entregas ou devoluções fora de Marrakech, o período mínimo de aluguel deve ser igual ou superior a 7 dias.</p>
                                    <h4>3.2. Fim do aluguel</h4>
                                    <p>O aluguel é considerado encerrado no momento em que as chaves e os documentos do carro são devolvidos ao nosso agente. Caso o veículo seja devolvido sem chaves ou documentos, serão cobradas taxas de duplicação ao cliente. Não podemos ser responsabilizados de forma alguma por propriedades deixadas nos veículos após o término do período de aluguel.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#custom">
                                <h3>4. O veículo</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>4.1. Estado do veículo</h4>
                                    <p>Você receberá um veículo em bom estado e limpo. Deve garantir que quaisquer defeitos visíveis no veículo antes de sair do local de entrega sejam mencionados no contrato de aluguel. Se isso não acontecer, qualquer dano visível que não for mencionado no contrato de aluguel no momento da retirada do veículo não será considerado e os custos de reparo serão de sua responsabilidade até o valor da franquia, a menos que você tenha apresentado anteriormente uma reclamação de danos ao nosso serviço de sinistros indicando que você não é responsável. (Consulte a seção de responsabilidade em caso de danos)</p>
                                    <h4>4.2. Uso do veículo</h4>
                                    <ul>
                                        <li>Você se compromete a dirigir o veículo "como um bom pai de família".</li>
                                        <li>Você se compromete a usar o veículo apenas em estradas pavimentadas, a menos que seja um 4x4. Qualquer dano ao veículo resultante da não observância desta cláusula será de responsabilidade do locatário, e os custos de reparo não cobertos pelo seguro serão cobrados a ele.</li>
                                        <li>É proibido usar o veículo fora do território marroquino sem a nossa permissão por escrito.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#custom">
                                <h3>5. Pagamento</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Para cada reserva feita através do nosso site, será solicitado que você faça um depósito online. O valor restante pode ser pago em dinheiro ou com cartão de banco na entrega do carro. No entanto, se você não desejar entregar em nosso escritório, deve nos informar por e-mail ou telefone se deseja pagar com cartão, para que possamos levar a máquina de pagamento.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#custom">
                                <h3>6. Seguro / Responsabilidade em caso de danos</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Todos os nossos veículos são totalmente segurados, mas há uma franquia de 10% para o cliente se sua responsabilidade parcial ou total estiver envolvida.</p>
                                    <p>Lembramos que não é possível recorrer ao seguro se o locatário não nos fornecer um formulário de sinistro ou um relatório policial.</p>
                                    <p>Em caso de perda/roubo do veículo, acessórios ou danos causados pelo cliente, ou na ausência de culpa de uma parte adversa (acidente fortuito, durante o estacionamento, colisão com um animal na estrada, carrinho de mão, dispositivo não automático, ...), o cliente deve fazer uma declaração indicando as causas e circunstâncias, e nos reembolsar até o valor da franquia.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#custom">
                                <h3>7. Alteração</h3>
                            </a>
            
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Alteração na Jacaranda Car é gratuita antes da retirada do veículo.</p>
                                    <h4>7.1. Alteração antes da retirada do veículo</h4>
                                    <p>Todas as alterações devem ser feitas através do portal do cliente, ou por e-mail para info@jacarandacar.com, até 12 horas antes da retirada do veículo.
                                        N.B.: Reservamo-nos o direito de aceitar ou não esta alteração com base na programação do veículo ao qual a alteração se refere.
                                        Se aceitarmos a alteração, um novo voucher estará disponível no seu portal do cliente, que você deve imprimir e entregar ao nosso representante na entrega.
                                        Se recusarmos a alteração, as condições e o voucher da reserva original permanecerão válidos.</p>
                                    <h4>7.2. Alteração após a retirada do veículo</h4>
                                    <p>Se você desejar alterar ou estender seu aluguel, precisará da nossa aprovação prévia. Uma vez obtida essa aprovação, você deve ir ao nosso escritório para alterar o contrato e, em caso de extensão, pagar o valor do aluguel adicional.
                                        Se for difícil para você ir ao nosso escritório, uma cópia do contrato de extensão será enviada por e-mail ou fax.</p>
                                    <h4>7.3. Retorno antecipado</h4>
                                    <p>Depois que o veículo for retirado e o contrato de aluguel for assinado, um retorno antecipado do veículo não dá direito a reembolso dos dias de aluguel não utilizados. No entanto, você terá direito a um voucher pelo número de dias restantes.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#read">
                                <h3>8. Cancelamento e não retirada do carro</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
            
                                    <p>Você pode cancelar sua reserva até o último momento antes da retirada do carro, sem necessidade de justificativa.
            
                                        A Jacaranda Car se compromete a reembolsá-lo integralmente em caso de cancelamento feito até 48 horas antes da retirada.
            
                                        Se você cancelar menos de 48 horas antes da retirada, ou se não retirar o veículo na data prevista, reteremos 10% do valor total do aluguel (máximo de 1.500,00 MAD). Você deve notificar a Jacaranda Car de seu cancelamento por e-mail, utilizando o endereço info@jacarandacar.com. Não aceitamos cancelamentos por telefone.
            
                                        O reembolso será feito exclusivamente através do mesmo método de pagamento usado na reserva.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#read">
                                <h3>9. Multas</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
            
                                    <p>As multas são de responsabilidade do cliente durante o período de aluguel. Ele deve pagá-las diretamente às autoridades ou representantes relevantes e garantir que a Jacaranda Car não seja responsabilizada por não pagamento.</p>
                                    <p>A Jacaranda Car se reserva o direito de debitar da conta do cliente, até um ano após o fim do contrato, qualquer quantia devida por multas ou outras penalidades incorridas durante o período de aluguel.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#read">
                                <h3>10. Avarias</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Todos os nossos veículos são meticulosamente revisados e mantidos. No entanto, em caso de avaria mecânica, comprometemo-nos a enviar um serviço de reboque para buscar o veículo e substituí-lo por outro, ou a reembolsar-lhe o valor do aluguel proporcional ao período de imobilização. A assistência está disponível 24 horas por dia através do telefone indicado no contrato de aluguel. Em caso de avaria, por favor, contate-nos imediatamente para que possamos tomar as medidas necessárias o mais rapidamente possível. Em nenhum caso você deve tentar reparar o veículo sem a nossa autorização prévia por escrito. Quaisquer reparos não autorizados previamente serão de sua responsabilidade e os custos não serão reembolsados.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="faqs-item ">
            
                            <a class="faqs-title" href="#read">
                                <h3>11. Atribuição de Jurisdição</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Para todas as disputas relativas à execução ou interpretação deste contrato, as partes elegem o foro de Marrakech, renunciando a qualquer outro.</p>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </main>
            </div>
        @else
            <div style="text-align:justify;">
                <main>
                    <div class="faqs-grid">

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>1. Préambule</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Le Clients ou Locataire reconnaît avoir, préalablement à sa réservation, pris
                                        connaissance de l'ensemble des conditions qui suivent et Il reconnaît en outre,
                                        avoir la capacité de conclure le présent contrat.
                                    </p>
                                    <p>
                                        Les conditions générales de vente suivantes régissent l'ensemble des transactions
                                        établies sur le catalogue web de Jacaranda car, toute commande passée sur ce site
                                        suppose du client son acceptation inconditionnelle et irrévocable de ces conditions,
                                        Si le Client ou Locataire n'accepte pas ces Termes, il les refusera de fait, et
                                        devra alors interrompre le processus de réservation. Sinon, le Client ou Locataire
                                        reconnaît avoir lu et compris ces Termes et les accepte.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>2. Conditions à remplir pour louer </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Vous devez nous fournir à la livraison du véhicule, avec justificatifs et originaux :
                                    <ul>
                                        <li> Un permis de conduire en cours de validité, depuis au moins 24 mois.</li>
                                        <li> Un passeport.</li>
                                        <li> Un moyen de paiement et (Carte bancaire, Argent liquide…Etc.)</li>
                                        <li> Nous ne gardons pas les originaux de ces documents.</li>
                                        <li> Tout conducteur doit être âgé d’au moins 23 ans et doit être titulaire d'un
                                            permis de conduire, en cours de validité, depuis au moins 24 mois.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>3. Durée de la location/ Prolongation </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>3.1. Mode de calcul</h4>
                                    <p>La durée de location se calcule par tranche de 24 heures, non fractionnable, à partir
                                        de l'heure de prise en charge du véhicule, toutefois vous bénéficier d'une tolérance
                                        de 3 heures à partir de laquelle une nouvelle période de 24 heures est appliquée.
                                    </p>
                                    <p>Si vous souhaiter prolonger votre location, il vous faudra avoir notre accord
                                        préalable, une fois que vous avez cet accord vous devez vous rendre à notre agence
                                        pour procéder au renouvellement du contrat et régler le montant du loyer
                                        additionnel.
                                    </p>
                                    <p>Dans le cas où il est vous sera difficile de vous rendre à notre agence, une copie du
                                        contrat de prolongation vous sera envoyé par mail ou par Fax.
                                    </p>
                                    <p>Pour toutes livraison ou retour hors marrakech, la durée minimum de location doit
                                        etre égal ou supérieur à 7 jours.</p>
                                    <h4>3.2. Fin de location </h4>
                                    <p>La location est considérer comme terminer au moment de restitution des clefs et
                                        papiers de la voiture à notre agent.
                                        Dans le cas où le véhicule est restitué sans ses papiers ou clefs, des frais de
                                        duplicata seront facturé au client.
                                        Nous ne pouvons en aucune façon être tenu responsables des biens qui auraient été
                                        oubliés dans les véhicules à l'issue de la location.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>4. Le véhicule </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <h4>4.1. Etat du véhicule </h4>
                                    <p>Vous recevrez un véhicule en état de marche et propre, vous devez vous assurer avant
                                        votre départ du lieu de livraison que toute défectuosité apparente sur le véhicule
                                        soit mentionnée sur le contrat de location, faute de quoi tout dégât apparent non
                                        mentionné sur le contrat de location au départ du véhicule ne sera pas considéré et
                                        engendra des frais de réparation à votre charge à hauteur de la franchise.
                                        Sauf dans le cas où vous aurez précédemment remis à notre service sinistre un
                                        constat à l’amiable ou est stipulé que vous n’êtes pas fautif. (Voir section
                                        responsabilité en cas de dommage)</p>
                                    <h4>4.2. Usage du véhicule</h4>
                                    <ul>
                                        <li>Vous vous engager à conduire le véhicule « en bon père de famille ».</li>
                                        <li>Vous vous engager à n’emprunter avec le véhicule que les routes carrossables
                                            goudronnées sauf si il s’agit d’un 4x4, tout dégât causé au véhicule résultant
                                            du non-respect de cette clause restera à la charge du locataire et des frais de
                                            réparation non couvert par l’assurance lui seront facturés.</li>
                                        <li>Il est interdit d’utiliser le véhicule en dehors du territoire Marocain sans une
                                            autorisation écrite délivrée par nos soins.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>5. Paiement</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Pour toute réservation passée sur notre site, vous serez invité à payer en ligne un
                                        acompte, le reste vous le règlerez à la livraison de la voiture en espèce ou par
                                        carte bancaire, toutefois, à l’exception d’une livraison au sein de notre agence
                                        vous devez nous avertir par mail ou par téléphone si vous désirai payer par carte
                                        pour prévoir d’apporter le terminal de paiement.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>6. Assurance / Responsabilité en cas de dommage </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Tous nos véhicules sont assurés en tous risque, toutefois une franchise de 10 % et à
                                        la charge du client dans le cas ou sa responsabilité partielle ou total est engagé.
                                    </p>
                                    <p>Nous vous rappelons qu’aucun recours à l’assurance n’est possible dans le cas où le
                                        locataire ne nous présente pas un Constat à l’amiable ou un constat de gendarmerie
                                        ou de police.</p>
                                    <p>Dans le cas de perte/vol du véhicule, d'accessoire ou de dommages causés à celui-ci
                                        par la faute du client , ou en l'absence de faute d'un tiers adverse (accident
                                        fortuit, pendant le stationnement, collision avec un animal traversant la chaussée,
                                        carriole, engin non automobile, …),le client devra en faire la déclaration précisant
                                        les causes et circonstances, et nous indemniser à hauteur de la franchise.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#custom">
                                <h3>7. Modification</h3>
                            </a>

                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>La modification chez Jacaranda car est gratuite avant la prise en charge du véhicule
                                    </p>
                                    <h4>7.1. Modification avant la prise en charge du véhicule </h4>
                                    <p>Toute modification doit être faite via l’espace client, ou bien par mail
                                        info@jacarandacar.com dans un délai ne dépassant pas les 12H avant la prise en
                                        charge du véhicule.
                                        N.B : Nous nous gardons le droit d’accepter ou de refuser cette modification selon
                                        le planning du véhicule objet de la modification.

                                        Si nous acceptons la modification, un nouveau voucher devra être disponible sur
                                        votre espace client, vous devez l’imprimé et le présenter le jour de la livraison à
                                        notre agent.
                                        Si Nous refusons la modification, les conditions initiales de réservations restent
                                        valables ainsi que le voucher.</p>
                                    <h4>7.2. Modification après la prise en charge du véhicule </h4>
                                    <p>Si vous souhaiter modifier ou prolonger votre location, il vous faudra avoir notre
                                        accord préalable, une fois que vous avez cet accord vous devez vous rendre à notre
                                        agence pour procéder à la modification du contrat et procéder, dans le cas d’une
                                        prolongation au règlement du montant du loyer additionnel.
                                        Dans le cas où il est vous sera difficile de vous rendre à notre agence, une copie
                                        du contrat de prolongation vous sera envoyé par mail ou par Fax.</p>
                                    <h4>7.3. Restitution anticipée</h4>
                                    <p>Après prise en charge du véhicule et signature du contrat de location, toute
                                        restitution anticipée du véhicule ne pourra donner droit à un remboursement des
                                        jours de location non utilisés, toutefois vous avez droit à un avoir nominatif égale
                                        au nombre de jours restant.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>8. Annulation et non prise en charge du véhicule</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">

                                    <p>Vous pouvez annuler votre réservation jusqu’à la dernière minute avant l'heure de
                                        prise en charge du véhicule sans motif ni justificatif.

                                        Le tableau ci-dessous décrit les frais de dossier imputables à votre remboursement :
                                    </p>
                                    <table border="1" cellpadding="0" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td style="height:63px; width:358px">
                                                    <p><b>Annulation dans un délai de plus de 48H avant la prise en charge
                                                            du véhicule.</b></p>
                                                </td>
                                                <td style="height:63px; width:198px">
                                                    <p><b>Remboursement total</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:56px; width:358px">
                                                    <p><b>Annulation dans un délai de moins de 48H avant la prise en charge
                                                            du véhicule.</b></p>
                                                </td>
                                                <td style="height:56px; width:198px">
                                                    <p><b>50% du montant de &nbsp;l’acompte payé en ligne.</b></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:108px; width:358px">
                                                    <p><b>Cas d’annulation par le client après l’heure de prise en charge
                                                            inscrite sur le voucher,<br>
                                                            Cas de non présentation,<br>
                                                            Cas de retard de présentation,<br>
                                                            cas de Non-respect des conditions de location (non présentation
                                                            de tous les documents, problème de Carte bancaire…)</b></p>
                                                </td>
                                                <td style="height:108px; width:198px">
                                                    <p><b>Aucun remboursement.</b></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Nous vous rappelons que ces pourcentages s’appliques sur l’acompte payé en ligne lors
                                        de la réservation et non pas sur montant total de la location, cet acompte est de
                                        l’ordre de 20% du cout total de la location.
                                        Pour éviter ces frais d’annulations, nous vous offrons la possibilité d'obtenir un
                                        avoir d’une durée de 2 ans, égale à la valeur de l’acompte payé en ligne.
                                        L’avoir est utilisable sur toute location de voiture auprès de Jacaranda car, par
                                        téléphone uniquement.
                                        Cet avoir est nominatif, incessible et non transmissible, Au-delà de 2 ans sa valeur
                                        est nulle et le montant correspondant perçus par Jacaranda car reste alors notre
                                        propriété</p>
                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>9. Tarif</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Le « Cout total de la location » communiqué à la page détail de réservation, est
                                        celui que vous allait réellement payer, il n’y aura aucune surprise le jour de la
                                        livraison.
                                        Le paiement se fait en deux tranche, un acompte payer en ligne sur le champ, et le
                                        reste sera payé le jour de la prise en charge de la voiture à l’agent chargé de vous
                                        livrer.</p>
                                    <h4>9.1 Ce qui est inclut dans le tarif</h4>
                                    <div class="contentConditions2" style="display: block;">
                                        <p><b>=> </b>Un forfait d’un nombre de&nbsp; jour limité calculé en tranche de 24H
                                            est en kilométrages illimité.</p>

                                        <p><b>=> </b>La T.V.A.</p>

                                        <p><b>=> </b>Une assurance tous risque avec franchise non rachetable &nbsp;de 10%.
                                        </p>

                                        <p><b>=></b>Une assurance pour les personnes transportées, pour le vol et pour
                                            l’incendie.</p>

                                        <p><b>=> </b>Une assurance bris de glace avec franchise de 10%.</p>

                                        <p><b>=> </b>Le deuxième conducteur.</p>

                                        <p><b>=> </b>Assistance 24H/24 et 7J/7.</p>

                                        <p><b>=> </b>Livraison et récupération du véhicule au lieu et ville choisis par le
                                            client lors de la réservation.</p>
                                    </div>
                                    <h4>9.2 Ce qui n’est pas inclut dans le tarif </h4>
                                    <p>Amende est contraventions :
                                        Le client demeure seul responsable des amendes, contraventions et procès-verbaux
                                        établis contre lui, Si celui-ci ne se décharge pas des amendes dont il a fait
                                        l’objet durant son séjour, nous serons en droit d’exiger le paiement de ces amendes.
                                        Si nous recevons des amendes après le départ du client, nous nous gardons le droit
                                        de fournir à la police ou à la gendarmerie toutes les informations nécessaire
                                        relatif au client responsable de ces amendes.
                                        Dans le cas d’un remorquage de la voiture à la fourrière pour cause de mauvais
                                        stationnement du client ou bien de stationnement dans une zone interdite, ou tout
                                        autre cause résultant de la négligence du locataire, seul le client est responsable
                                        de procéder à la sortie du véhicule de la fourrière en payant les amendes et
                                        procédant à toutes les tâches administratives nécessaire à l’obtention du bon de
                                        sortie.
                                        Toutefois nous pouvons nous charger de procéder à ces taches et obtenir le bon de
                                        sortie moyennant des frais de services qui seront facturé au client en supplément du
                                        prix des amendes engendrés, dans ce cas la présence du client est nécessaire au
                                        moment de la sortie du véhicule.</p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>10. Réservation </h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Le processus de réservation chez Jacaranda car est des plus simples, les voitures
                                        affichées dans le résultat de recherche sont réellement disponible.
                                        Votre voiture est garantie du moment où vous procéder au paiement de votre
                                        réservation et recevez le Voucher, aucune annulation de notre part n’est possible.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="faqs-item ">

                            <a class="faqs-title" href="#read">
                                <h3>11. Protection de vie privée</h3>
                            </a>
                            <div class="faqs-content">
                                <div class="faqs-content-inside">
                                    <p>Durant le processus de réservation, nous serons amenés à vous demander de nous
                                        fournir des informations, certaines sont obligatoire (indiquées par un astérisque
                                        sur notre site Internet) du fait qu’ils sont indispensable au traitement de votre
                                        réservation, d’autres sont facultatives qui nous aiderons à mieux vous servir, ces
                                        informations ne seront d’une aucune manière transmise à une tiers partie.
                                        Vous avez la possibilité de modifier ces informations en vous connectant sur votre
                                        espace client, dans le cas où vous voulez supprimer votre compte il vous faut
                                        seulement envoyer une demande via l’adresse mail utilisé pour crée votre compte à
                                        l’adresse mail suivante : info@jacarandacar.com
                                        Les informations de votre carte bancaire utilisé pour le paiement de votre
                                        réservation ne sont ni communiqué, ni stocké, ni transmis à n’importe quelle étape
                                        du processus à jacarandacar.com
                                        La partie paiement du processus de réservation est effectuée chez un centre de
                                        paiement sécurisé.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                </main>

            </div>
        @endif





    </div>
@endsection

@section('footer')
    <script>
        var acc = document.getElementsByClassName('faqs-title');
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener('click', function() {
                this.classList.toggle('activated');
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        }
    </script>
@endsection
