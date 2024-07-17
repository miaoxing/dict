/**
 * @share [id]/edit
 */
import { CListBtn } from '@mxjs/a-clink';
import { Page, PageActions } from '@mxjs/a-page';
import { Form, FormItem, FormActions } from '@mxjs/a-form';
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

            <FormActions/>
          </>;
        }}
      </Form>
    </Page>
  );
};

export default New;
