
import * as React from 'react';
import { __ } from '@wordpress/i18n';


const save = () => {
	return (
		<p>
			{ __( 'Hello from the save!', 'tsblock' ) }
		</p>
	);
}

export default save;