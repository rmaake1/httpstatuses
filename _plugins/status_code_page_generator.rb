module Jekyll

  class StatusCodePage < Page
    def initialize(site, base, code)
      @site = site
      @base = base
      @dir = code['code']
      @name = 'index.html'

      self.process(@name)
      self.read_yaml(File.join(base, '_layouts'), 'status_code.html')
      self.data.merge!(code)
    end
  end

  class StatusCodePageGenerator < Generator
    safe true

    def generate(site)
      site.data['codes'].each do |_, code_class|
        code_class['codes'].each do |_, code|
          site.pages << StatusCodePage.new(site, site.source, code)
        end
      end
    end
  end

end
