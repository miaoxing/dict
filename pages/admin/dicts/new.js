/**
 * @share [id]/edit
 */
import {CListBtn} from '@mxjs/a-clink';
import {Page, PageActions} from '@mxjs/a-page';
import {Form, FormItem, FormAction} from '@mxjs/a-form';

const New = () => {
  return (
    <Page>
      <PageActions>
        <CListBtn/>
      </PageActions>

      <Form>
        {({id}) => {
          return <>
            <FormItem label="名称" name="name" required/>

            <FormItem label="标识" name="code" type={id ? 'plain' : 'text'} required/>

            <FormItem name="id" type="hidden"/>

            <FormAction/>
          </>;
        }}
      </Form>
    </Page>
  );
};

export default New;
