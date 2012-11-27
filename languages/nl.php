<?php
$language = array (
  'digest:cli:error:secret' => 'De opgegeven secret is ongeldig, de digest kan niet worden gestart',
  'digest:settings:multi_core:title' => 'Multi-core ondersteuning',
  'digest:settings:multi_core:description' => 'Als je een site hebt met veel gebruikers (> 5000 gebruikers) dan kun je de afhandeling van de Digest splitsen over meerdere cores. Selecteer aub niet meer cores als je webserver heeft, anders heeft werkt dit alleen vertragend op de Digest.',
  'digest:settings:multi_core:warning' => 'Laat deze instelling aub op de standaard instelling staan als je niet weer wat multi-core betekend of je site minder dan 5000 gebruikers heeft.',
  'digest:settings:multi_core:number' => 'Selecteer het aantal cores welke gebruikt mogen worden voor Digest',
  'digest:admin:stats:site:not_enabled' => 'Site digest is niet ingeschakeld in de plugin instellingen',
  'digest:admin:stats:not_collected' => 'Er zijn nog geen statistieken verzameld',
  'digest:admin:stats:group:not_enabled' => 'Groep digest is niet ingeschakeld in de plugin instellingen',
  'digest:readable:time:mseconds' => 'msec',
  'digest:admin:stats:site:title' => 'Site digest statistieken',
  'digest:admin:stats:general:ts_start_cron' => 'Tijdstip dat de CRON startte',
  'digest:admin:stats:general:mts_start_digest' => 'Verstreken tijd voordat de digest begon',
  'digest:admin:stats:general:peak_memory_start' => 'Piek geheugengebruik voordat de digest begon',
  'digest:admin:stats:general:peak_memory_end' => 'Piek geheugengebruik nadat de digest klaar was',
  'digest:admin:stats:general:mts_end_digest' => 'Tijd die nodig was om de digest te verwerken',
  'digest:admin:stats:site:general:mts_user_selection_done' => 'Tijd die nodig was om de gebruikers te selecteren',
  'digest:admin:stats:total_time' => 'Totale gebruikte tijd',
  'digest:admin:stats:total_memory' => 'Total gelekt geheugen',
  'digest:admin:stats:groups' => 'Groepen verwerkt',
  'digest:admin:stats:users' => 'Gebruikers verwerkt',
  'digest:admin:stats:mails' => 'Mail verstuurd',
  'digest:admin:stats:distribution:fortnightly' => 'Oneven weken op %s',
  'digest:admin:stats:distribution:monthly' => '%s van de maand',
  'digest:admin:stats:group:title' => 'Groep digest statistieken',
  'digest:admin:stats:group:general:mts_group_selection_done' => 'Tijd die nodig was om de groepen te selecteren',
  'digest:admin:stats:group:general:total_time_user_selection' => 'Totale tijd die nodig was voor gebruikers selectie',
  'digest:distribution' => 'Distributie',
  'digest:distribution:distributed' => 'Gedistribueerd',
  'digest:distribution:description' => 'Selecteer een specifieke aflever dag of dag van de maand. Indien je kiest voor gedistribueerd, zal de aflever dag gegenereerd worden voor elke gebruiker zodat het verdeeld wordt over de interval. Gebruikers hebben zelf niet de keuze om de afleverdag te selecteren.',
  'digest:day:sunday' => 'Zondag',
  'digest:day:monday' => 'Maandag',
  'digest:day:tuesday' => 'Dinsdag',
  'digest:day:wednesday' => 'Woensdag',
  'digest:day:thursday' => 'Donderdag',
  'digest:day:friday' => 'Vrijdag',
  'digest:day:saturday' => 'Zaterdag',
  'digest:settings:notice' => '<b>OPGELET:</b> Het gebruik van deze functionaliteit kan veel emails versturen.',
  'digest:settings:production' => 'In productie',
  'digest:settings:interval:default' => 'Standaard interval instellingen',
  'digest:settings:custom_text:title' => 'Vrije tekst',
  'digest:settings:custom_text:description' => 'Hier kun je vrije teksten opnemen die toegevoegd worden aan de kop en/of voettekst van de update.',
  'digest:settings:custom_text:site:header' => 'Site header tekst',
  'digest:settings:custom_text:site:footer' => 'Site footer tekst',
  'digest:settings:custom_text:group:header' => 'Groep header tekst',
  'digest:settings:custom_text:group:footer' => 'Groep footer tekst',
  'digest:page_menu:settings' => 'Digest instellingen',
  'digest:page_menu:theme_preview' => 'Digest voorbeeld',
  'admin:statistics:digest' => 'Digest analyse',
  'digest:settings:production:description' => 'Als je gebruik maakt van de Digest plugin kunnen er, afhankelijk van de instellingen, veel e-mails verstuurd worden. Om er zeker van te zijn dat er geen e-mails worden verstuurd aan de gebruikers voordat je hiervoor klaar bent, is deze instelling. Het stelt je in staat het systeem te testen en als je klaar bent kun je het systeem in productie zetten.',
  'digest:settings:production:option' => 'Schakel het versturen van Digest e-mail in',
  'digest:settings:production:group_option' => 'Schakel groep digest e-mail in',
  'digest:settings:interval:description' => 'Door het instellen van een standaard waarde zullen alle gebruikers die geen frequentie hebben ingesteld een update ontvangen op deze standaard interval.',
  'digest:elements:unsubscribe:info' => 'Deze e-mail is verstuurd door %s omdat je bent aangemeld voor deze digest.',
  'digest:elements:unsubscribe:settings' => 'Verander je %saflever instellingen%s.',
  'digest:elements:unsubscribe:unsubscribe' => 'Om je direct af te melden van deze digest, %sklik hier%s.',
  'digest:elements:online' => 'Als je dit bericht niet kunt lezen, bekijk deze digest %sonline%s',
  'digest' => 'Updates',
  'digest:interval:none' => 'Geen',
  'digest:interval:default' => 'Gebruik de groepsvoorkeur (huidig: %s)',
  'digest:interval:daily' => 'Dagelijks',
  'digest:interval:weekly' => 'Wekelijks',
  'digest:interval:fortnightly' => '2 wekelijks',
  'digest:interval:monthly' => 'Maandelijks',
  'digest:interval:error' => 'Ongeldige interval',
  'digest:readable:time:seconds' => 'sec',
  'digest:readable:time:minutes' => 'min',
  'digest:readable:time:hours' => 'uur',
  'digest:submenu:groupsettings' => 'Update instellingen',
  'digest:settings:interval:title' => 'Updates interval instellingen',
  'digest:settings:interval:site_default' => 'De standaard instelling voor de site updates',
  'digest:settings:interval:group_default' => 'De standaard instelling voor de groep updates',
  'digest:settings:never:title' => 'Nooit aangemelde gebruikers',
  'digest:settings:never:include' => 'Moeten ook gebruikers die nog nooit zijn aangemeld een update ontvangen?',
  'digest:usersettings:title' => 'Persoonlijk Updates instellingen',
  'digest:usersettings:error:user' => 'Je hebt geen toegang tot de update instellingen van deze gebruiker',
  'digest:usersettings:no_settings' => 'Er zijn op dit moment geen instellingen te maken voor de updates.',
  'digest:usersettings:site:title' => 'Site Updates instellingen',
  'digest:usersettings:site:description' => 'De Site Update zal je informeren over recente activiteit op site niveau.',
  'digest:usersettings:site:setting' => 'Hoe vaak wil je een Site Update ontvangen?',
  'digest:usersettings:groups:title' => 'Groep Update instellingen',
  'digest:usersettings:groups:description' => 'De Groep Update zal je informeren over recente activiteit binnen de geselecteerde groep.',
  'digest:usersettings:groups:group_header' => 'Groepsnaam',
  'digest:usersettings:groups:setting_header' => 'Frequentie',
  'digest:groupsettings:title' => 'Groep Updates instellingen',
  'digest:groupsettings:description' => 'Met welke frequentie wil je dat je groepsleden een update van de activiteit in deze groep ontvangen? Leden kunnen in hun persoonlijk instellingen wel een andere frequentie instellen.',
  'digest:groupsettings:setting' => 'Groep Update instelling',
  'digest:show:error:input' => 'Incorrecte invoer om de update te bekijken',
  'digest:show:no_data' => 'Geen informatie gevonden voor deze interval',
  'digest:message:title:site' => '%s: %s update',
  'digest:message:title:group' => '%s - %s: %s update',
  'digest:register:enable' => 'Ik wil een site update ontvangen',
  'digest:unsubscribe:error:input' => 'Onjuiste invoer om je af te kunnen melden van updates',
  'digest:unsubscribe:error:code' => 'De opgegeven validatie code is onjuist',
  'digest:unsubscribe:error:save' => 'Er is een onbekende fout opgetreden tijdens het uitschrijven van de udpate',
  'digest:unsubscribe:success' => 'Je heb je succesvol afgemeld van de update',
  'digest:action:update:usersettings:error:unknown' => 'Een onbekend probleem is opgetreden tijdens het opslaan van je updates instellingen',
  'digest:action:update:usersettings:success' => 'Updates instellingen succesvol aangepast',
  'digest:action:update:groupsettings:error:save' => 'Een onbekend probleem is opgetreden tijdens het opslaan van de groeps updates instellingen',
  'digest:action:update:groupsettings:success' => 'Updates instellingen succesvol aangepast',
  'digest:mail:plaintext:description' => 'Je email client ondersteunt geen HTML mails. 
		
		Om de site updates toch te kunnen lezen kun je de volgende link gebruiken: %s.',
);
add_translation("nl", $language);
