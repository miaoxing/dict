/**
 * @share [id]/edit
 */
import { CListBtn } from '@mxjs/a-clink';
import { Page, PageActions } from '@mxjs/a-page';
import { Form, FormItem, FormAction } from '@mxjs/a-form';
import { Section } from '@mxjs/a-section';

const New = () => {
  return (
    <Page>
      <PageActions>
        <CListBtn/>
      </PageActions>

      <Form>
        {({id}) => {
          return <>
            <Section>
              <FormItem label="名称" name="name" required/>

              <FormItem label="标识" name="code" type={id ? 'plain' : 'text'} required/>
            </Section>

            <FormAction/>
          </>;
        }}
      </Form>
    </Page>
  );
};

export default New;
