
import * as React from 'react';
import { __ } from '@wordpress/i18n';

type EditProps = {
	"className": string,
};

const Edit = ( { className }: EditProps ) => {
	return (
		<p className={ className }>
			{ __( 'Hi from the editor!', 'tsblock' ) }
		</p>
	);
}

export default Edit;