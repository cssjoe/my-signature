<?php
/*
Plugin Name:  My Signature
Plugin URI:   https://www.boldgrid.com
Description:  Add a signature content block using a shortcode.
Version:      1.0.0
Author:       Joe Cartonia
Author URI:   https://www.boldgrid.com/the-team/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  my-signature
Domain Path:  /languages
*/

/**
 * Class: My_Signature
 *
 * @package My_Signature
 *
 * @since 1.0.0
 */
class My_Signature {
	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// Register the shortcode.
		add_shortcode( 'my-signature', array(
			$this,
			'display_signature',
		) );
	}

	/**
	 * Display signature.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function display_signature() {
		ob_start();
		?>
<div>
	<img src="data:image/png;base64,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" /><br />
	Joe Cartonia<br />
	<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACcFBMVEUAAABMpPFLpPFLpPFMpfJGnOdMpPFMpPJLou9KoOxKoe1Lo/FMpPJMpPJMpfNMpvRMpvROrfxLo/BLou9JoO5Lo/BLo/FOqPdLou9Loe5Lou5Lo/FMpPFMpPJMpPJIn+xLovBLou9Lou9Lo/BLou9MpPJLo/FNqfpLoe5KoO1KoOxKoOxKoe1Lou9MpPJMpPJIn+xLou9Lou9Koe1Koe1LovA+gr5Lou5Lou9Koe1KoOxKoOxKoOxKoOxLoe5MpPFLo/BIn+xLovBLo/BKoe1KoOxKoe1Koe5Lou5Loe5KoOxKoOxKoOxKoOxLoe5JnulLo/BIn+xLo/BLo/BLou5KoOxKoOxKoOxKoOxKoO1KoOxKoOxKoOxKoOxKoe5Loe5Lo/FLovBLo/BKoe1KoOxKoOxKoOxKoOxKoOxKoOxKoOxKoOxKoO1Lou9Lou9Lo/FJnuhLou9Koe1KoOxKoOxKoOxKoOxKoe1Lo/FLovBLo/FLo/FLo/FLoe5KoOxKoOxKoOxKoOxKoOxKoOxLou5Koe1MpPJJoOxWsv9Lo/FPq/1Lou9Koe1KoOxKoOxKoOxKoOxKoOxKoe5Lo/FLo/BKoe5JoOxPqvtMpPJLo/BLovBLou9KoO1KoOxKoOxKoOxKoOxLoe5Lo/BLou9Lo/BKn+xNpvVMpPNLovBKoe1KoO1KoOxKoOxKoOxKoe1Lou9Mo/FLou9Lou9JnutIoOtLo/FMpPRLovBLou9Koe5Koe5Loe5Lou9Lo/FJnupLo/FLo/BKnuxLovBNpPlLo/BLou9Koe1KoOxKoe1Lou5Lo/BNp/VMpPJKoOxKoOz///9/g5YnAAAAzXRSTlMAAAAAAAAAAAAAAAAAAAAAAQEAAAAAAAI3cV0RDwwAAAAedhEAAAABauv//L+aKgAAADXwrC4AACTi/////8wxAAAAFcb/4pJLYPX///93AAAAAByk+///+fH9///8VAAAAB3U///////////tMgAAAFPd/////7wLAAAAFb3///////lbAAAAAAABVs/6/////6EKAAAAAAQKHH3y/////acZAAAAACB/zvv///bMaw4AAAAAAAETPWV4a0MUAAAAAAAAAAAAAAAAAAAAs66XfQAAAAFiS0dEz4PewmkAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAHdElNRQfiBBMQIiCgjosAAAABCUlEQVQoz2NgGGjAyMTMwsrAwMbOwcnFzcPLB5fgFxAUEhYRFROXkJSSlpGVk4dJKCgqKauoqqlraGpp6+jq6RvAJAyNjE1MzcwtLK2sbWzt7B0cYRJOzi6ubu4enl7eZ318/fwDAmESQcEhoWHhEZFR0WdjYuPiE+CWJyYlp6SeS0vPyMzKzsnNQzg3v6CwqLjkLBCUlpVXVCIkqqprauvqG86ebWxqbmltg4u3d3R2dff09p3tnzBx0uQpU+ES06bPmDlr9py58+YvWLho8RKESUuXLV+xctXqNWvXrd+wcdNmhMSWrdu279i5a/eevfv2HziIHIiHDh85euz4iZOnTp8Z6PiEAAAomFmyUfLp7wAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wNC0xOVQxNjozNDozMiswMDowMMR8X6oAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDQtMTlUMTY6MzQ6MzIrMDA6MDC1IecWAAAAAElFTkSuQmCC" alt="twitter" />
	<a target="_blank" href="https://twitter.com/joemotocss">@joemotocss</a>
</div>
<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
}

new My_Signature();
